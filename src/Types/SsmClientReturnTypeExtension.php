<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SsmClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Ssm\SsmClient>
     */
    public function getClass(): string
    {
        return \Aws\Ssm\SsmClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addTagsToResource',
            'associateOpsItemRelatedItem',
            'cancelCommand',
            'cancelMaintenanceWindowExecution',
            'createActivation',
            'createAssociation',
            'createAssociationBatch',
            'createDocument',
            'createMaintenanceWindow',
            'createOpsItem',
            'createOpsMetadata',
            'createPatchBaseline',
            'createResourceDataSync',
            'deleteActivation',
            'deleteAssociation',
            'deleteDocument',
            'deleteInventory',
            'deleteMaintenanceWindow',
            'deleteOpsItem',
            'deleteOpsMetadata',
            'deleteParameter',
            'deleteParameters',
            'deletePatchBaseline',
            'deleteResourceDataSync',
            'deleteResourcePolicy',
            'deregisterManagedInstance',
            'deregisterPatchBaselineForPatchGroup',
            'deregisterTargetFromMaintenanceWindow',
            'deregisterTaskFromMaintenanceWindow',
            'describeActivations',
            'describeAssociation',
            'describeAssociationExecutionTargets',
            'describeAssociationExecutions',
            'describeAutomationExecutions',
            'describeAutomationStepExecutions',
            'describeAvailablePatches',
            'describeDocument',
            'describeDocumentPermission',
            'describeEffectiveInstanceAssociations',
            'describeEffectivePatchesForPatchBaseline',
            'describeInstanceAssociationsStatus',
            'describeInstanceInformation',
            'describeInstancePatchStates',
            'describeInstancePatchStatesForPatchGroup',
            'describeInstancePatches',
            'describeInstanceProperties',
            'describeInventoryDeletions',
            'describeMaintenanceWindowExecutionTaskInvocations',
            'describeMaintenanceWindowExecutionTasks',
            'describeMaintenanceWindowExecutions',
            'describeMaintenanceWindowSchedule',
            'describeMaintenanceWindowTargets',
            'describeMaintenanceWindowTasks',
            'describeMaintenanceWindows',
            'describeMaintenanceWindowsForTarget',
            'describeOpsItems',
            'describeParameters',
            'describePatchBaselines',
            'describePatchGroupState',
            'describePatchGroups',
            'describePatchProperties',
            'describeSessions',
            'disassociateOpsItemRelatedItem',
            'getAutomationExecution',
            'getCalendarState',
            'getCommandInvocation',
            'getConnectionStatus',
            'getDefaultPatchBaseline',
            'getDeployablePatchSnapshotForInstance',
            'getDocument',
            'getExecutionPreview',
            'getInventory',
            'getInventorySchema',
            'getMaintenanceWindow',
            'getMaintenanceWindowExecution',
            'getMaintenanceWindowExecutionTask',
            'getMaintenanceWindowExecutionTaskInvocation',
            'getMaintenanceWindowTask',
            'getOpsItem',
            'getOpsMetadata',
            'getOpsSummary',
            'getParameter',
            'getParameterHistory',
            'getParameters',
            'getParametersByPath',
            'getPatchBaseline',
            'getPatchBaselineForPatchGroup',
            'getResourcePolicies',
            'getServiceSetting',
            'labelParameterVersion',
            'listAssociationVersions',
            'listAssociations',
            'listCommandInvocations',
            'listCommands',
            'listComplianceItems',
            'listComplianceSummaries',
            'listDocumentMetadataHistory',
            'listDocumentVersions',
            'listDocuments',
            'listInventoryEntries',
            'listNodes',
            'listNodesSummary',
            'listOpsItemEvents',
            'listOpsItemRelatedItems',
            'listOpsMetadata',
            'listResourceComplianceSummaries',
            'listResourceDataSync',
            'listTagsForResource',
            'modifyDocumentPermission',
            'putComplianceItems',
            'putInventory',
            'putParameter',
            'putResourcePolicy',
            'registerDefaultPatchBaseline',
            'registerPatchBaselineForPatchGroup',
            'registerTargetWithMaintenanceWindow',
            'registerTaskWithMaintenanceWindow',
            'removeTagsFromResource',
            'resetServiceSetting',
            'resumeSession',
            'sendAutomationSignal',
            'sendCommand',
            'startAssociationsOnce',
            'startAutomationExecution',
            'startChangeRequestExecution',
            'startExecutionPreview',
            'startSession',
            'stopAutomationExecution',
            'terminateSession',
            'unlabelParameterVersion',
            'updateAssociation',
            'updateAssociationStatus',
            'updateDocument',
            'updateDocumentDefaultVersion',
            'updateDocumentMetadata',
            'updateMaintenanceWindow',
            'updateMaintenanceWindowTarget',
            'updateMaintenanceWindowTask',
            'updateManagedInstanceRole',
            'updateOpsItem',
            'updateOpsMetadata',
            'updatePatchBaseline',
            'updateResourceDataSync',
            'updateServiceSetting',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addTagsToResource' => $this->addTagsToResource(),
            'associateOpsItemRelatedItem' => $this->associateOpsItemRelatedItem(),
            'cancelCommand' => $this->cancelCommand(),
            'cancelMaintenanceWindowExecution' => $this->cancelMaintenanceWindowExecution(),
            'createActivation' => $this->createActivation(),
            'createAssociation' => $this->createAssociation(),
            'createAssociationBatch' => $this->createAssociationBatch(),
            'createDocument' => $this->createDocument(),
            'createMaintenanceWindow' => $this->createMaintenanceWindow(),
            'createOpsItem' => $this->createOpsItem(),
            'createOpsMetadata' => $this->createOpsMetadata(),
            'createPatchBaseline' => $this->createPatchBaseline(),
            'createResourceDataSync' => $this->createResourceDataSync(),
            'deleteActivation' => $this->deleteActivation(),
            'deleteAssociation' => $this->deleteAssociation(),
            'deleteDocument' => $this->deleteDocument(),
            'deleteInventory' => $this->deleteInventory(),
            'deleteMaintenanceWindow' => $this->deleteMaintenanceWindow(),
            'deleteOpsItem' => $this->deleteOpsItem(),
            'deleteOpsMetadata' => $this->deleteOpsMetadata(),
            'deleteParameter' => $this->deleteParameter(),
            'deleteParameters' => $this->deleteParameters(),
            'deletePatchBaseline' => $this->deletePatchBaseline(),
            'deleteResourceDataSync' => $this->deleteResourceDataSync(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deregisterManagedInstance' => $this->deregisterManagedInstance(),
            'deregisterPatchBaselineForPatchGroup' => $this->deregisterPatchBaselineForPatchGroup(),
            'deregisterTargetFromMaintenanceWindow' => $this->deregisterTargetFromMaintenanceWindow(),
            'deregisterTaskFromMaintenanceWindow' => $this->deregisterTaskFromMaintenanceWindow(),
            'describeActivations' => $this->describeActivations(),
            'describeAssociation' => $this->describeAssociation(),
            'describeAssociationExecutionTargets' => $this->describeAssociationExecutionTargets(),
            'describeAssociationExecutions' => $this->describeAssociationExecutions(),
            'describeAutomationExecutions' => $this->describeAutomationExecutions(),
            'describeAutomationStepExecutions' => $this->describeAutomationStepExecutions(),
            'describeAvailablePatches' => $this->describeAvailablePatches(),
            'describeDocument' => $this->describeDocument(),
            'describeDocumentPermission' => $this->describeDocumentPermission(),
            'describeEffectiveInstanceAssociations' => $this->describeEffectiveInstanceAssociations(),
            'describeEffectivePatchesForPatchBaseline' => $this->describeEffectivePatchesForPatchBaseline(),
            'describeInstanceAssociationsStatus' => $this->describeInstanceAssociationsStatus(),
            'describeInstanceInformation' => $this->describeInstanceInformation(),
            'describeInstancePatchStates' => $this->describeInstancePatchStates(),
            'describeInstancePatchStatesForPatchGroup' => $this->describeInstancePatchStatesForPatchGroup(),
            'describeInstancePatches' => $this->describeInstancePatches(),
            'describeInstanceProperties' => $this->describeInstanceProperties(),
            'describeInventoryDeletions' => $this->describeInventoryDeletions(),
            'describeMaintenanceWindowExecutionTaskInvocations' => $this->describeMaintenanceWindowExecutionTaskInvocations(),
            'describeMaintenanceWindowExecutionTasks' => $this->describeMaintenanceWindowExecutionTasks(),
            'describeMaintenanceWindowExecutions' => $this->describeMaintenanceWindowExecutions(),
            'describeMaintenanceWindowSchedule' => $this->describeMaintenanceWindowSchedule(),
            'describeMaintenanceWindowTargets' => $this->describeMaintenanceWindowTargets(),
            'describeMaintenanceWindowTasks' => $this->describeMaintenanceWindowTasks(),
            'describeMaintenanceWindows' => $this->describeMaintenanceWindows(),
            'describeMaintenanceWindowsForTarget' => $this->describeMaintenanceWindowsForTarget(),
            'describeOpsItems' => $this->describeOpsItems(),
            'describeParameters' => $this->describeParameters(),
            'describePatchBaselines' => $this->describePatchBaselines(),
            'describePatchGroupState' => $this->describePatchGroupState(),
            'describePatchGroups' => $this->describePatchGroups(),
            'describePatchProperties' => $this->describePatchProperties(),
            'describeSessions' => $this->describeSessions(),
            'disassociateOpsItemRelatedItem' => $this->disassociateOpsItemRelatedItem(),
            'getAutomationExecution' => $this->getAutomationExecution(),
            'getCalendarState' => $this->getCalendarState(),
            'getCommandInvocation' => $this->getCommandInvocation(),
            'getConnectionStatus' => $this->getConnectionStatus(),
            'getDefaultPatchBaseline' => $this->getDefaultPatchBaseline(),
            'getDeployablePatchSnapshotForInstance' => $this->getDeployablePatchSnapshotForInstance(),
            'getDocument' => $this->getDocument(),
            'getExecutionPreview' => $this->getExecutionPreview(),
            'getInventory' => $this->getInventory(),
            'getInventorySchema' => $this->getInventorySchema(),
            'getMaintenanceWindow' => $this->getMaintenanceWindow(),
            'getMaintenanceWindowExecution' => $this->getMaintenanceWindowExecution(),
            'getMaintenanceWindowExecutionTask' => $this->getMaintenanceWindowExecutionTask(),
            'getMaintenanceWindowExecutionTaskInvocation' => $this->getMaintenanceWindowExecutionTaskInvocation(),
            'getMaintenanceWindowTask' => $this->getMaintenanceWindowTask(),
            'getOpsItem' => $this->getOpsItem(),
            'getOpsMetadata' => $this->getOpsMetadata(),
            'getOpsSummary' => $this->getOpsSummary(),
            'getParameter' => $this->getParameter(),
            'getParameterHistory' => $this->getParameterHistory(),
            'getParameters' => $this->getParameters(),
            'getParametersByPath' => $this->getParametersByPath(),
            'getPatchBaseline' => $this->getPatchBaseline(),
            'getPatchBaselineForPatchGroup' => $this->getPatchBaselineForPatchGroup(),
            'getResourcePolicies' => $this->getResourcePolicies(),
            'getServiceSetting' => $this->getServiceSetting(),
            'labelParameterVersion' => $this->labelParameterVersion(),
            'listAssociationVersions' => $this->listAssociationVersions(),
            'listAssociations' => $this->listAssociations(),
            'listCommandInvocations' => $this->listCommandInvocations(),
            'listCommands' => $this->listCommands(),
            'listComplianceItems' => $this->listComplianceItems(),
            'listComplianceSummaries' => $this->listComplianceSummaries(),
            'listDocumentMetadataHistory' => $this->listDocumentMetadataHistory(),
            'listDocumentVersions' => $this->listDocumentVersions(),
            'listDocuments' => $this->listDocuments(),
            'listInventoryEntries' => $this->listInventoryEntries(),
            'listNodes' => $this->listNodes(),
            'listNodesSummary' => $this->listNodesSummary(),
            'listOpsItemEvents' => $this->listOpsItemEvents(),
            'listOpsItemRelatedItems' => $this->listOpsItemRelatedItems(),
            'listOpsMetadata' => $this->listOpsMetadata(),
            'listResourceComplianceSummaries' => $this->listResourceComplianceSummaries(),
            'listResourceDataSync' => $this->listResourceDataSync(),
            'listTagsForResource' => $this->listTagsForResource(),
            'modifyDocumentPermission' => $this->modifyDocumentPermission(),
            'putComplianceItems' => $this->putComplianceItems(),
            'putInventory' => $this->putInventory(),
            'putParameter' => $this->putParameter(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'registerDefaultPatchBaseline' => $this->registerDefaultPatchBaseline(),
            'registerPatchBaselineForPatchGroup' => $this->registerPatchBaselineForPatchGroup(),
            'registerTargetWithMaintenanceWindow' => $this->registerTargetWithMaintenanceWindow(),
            'registerTaskWithMaintenanceWindow' => $this->registerTaskWithMaintenanceWindow(),
            'removeTagsFromResource' => $this->removeTagsFromResource(),
            'resetServiceSetting' => $this->resetServiceSetting(),
            'resumeSession' => $this->resumeSession(),
            'sendAutomationSignal' => $this->sendAutomationSignal(),
            'sendCommand' => $this->sendCommand(),
            'startAssociationsOnce' => $this->startAssociationsOnce(),
            'startAutomationExecution' => $this->startAutomationExecution(),
            'startChangeRequestExecution' => $this->startChangeRequestExecution(),
            'startExecutionPreview' => $this->startExecutionPreview(),
            'startSession' => $this->startSession(),
            'stopAutomationExecution' => $this->stopAutomationExecution(),
            'terminateSession' => $this->terminateSession(),
            'unlabelParameterVersion' => $this->unlabelParameterVersion(),
            'updateAssociation' => $this->updateAssociation(),
            'updateAssociationStatus' => $this->updateAssociationStatus(),
            'updateDocument' => $this->updateDocument(),
            'updateDocumentDefaultVersion' => $this->updateDocumentDefaultVersion(),
            'updateDocumentMetadata' => $this->updateDocumentMetadata(),
            'updateMaintenanceWindow' => $this->updateMaintenanceWindow(),
            'updateMaintenanceWindowTarget' => $this->updateMaintenanceWindowTarget(),
            'updateMaintenanceWindowTask' => $this->updateMaintenanceWindowTask(),
            'updateManagedInstanceRole' => $this->updateManagedInstanceRole(),
            'updateOpsItem' => $this->updateOpsItem(),
            'updateOpsMetadata' => $this->updateOpsMetadata(),
            'updatePatchBaseline' => $this->updatePatchBaseline(),
            'updateResourceDataSync' => $this->updateResourceDataSync(),
            'updateServiceSetting' => $this->updateServiceSetting(),
        };
    }
    private function addTagsToResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateOpsItemRelatedItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelCommand(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelMaintenanceWindowExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowExecutionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createActivation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ActivationId'),
                new \PHPStan\Type\Constant\ConstantStringType('ActivationCode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssociationDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Date'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateAssociationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Overview'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationTargetParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComplianceSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncCompliance'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyOnlyAtCronInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('CalendarNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalInfo'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociationStatusAggregatedCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createAssociationBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Date'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateAssociationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Overview'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationTargetParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComplianceSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncCompliance'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyOnlyAtCronInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('CalendarNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalInfo'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociationStatusAggregatedCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Entry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fault'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomationTargetParameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceSeverity'),
                        new \PHPStan\Type\Constant\ConstantStringType('SyncCompliance'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplyOnlyAtCronInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('CalendarNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('OutputS3Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Client'),
                        new \PHPStan\Type\Constant\ConstantStringType('Server'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Sha1'),
                    new \PHPStan\Type\Constant\ConstantStringType('Hash'),
                    new \PHPStan\Type\Constant\ConstantStringType('HashType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SchemaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentsInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Requires'),
                    new \PHPStan\Type\Constant\ConstantStringType('Author'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovedVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingReviewVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Category'),
                    new \PHPStan\Type\Constant\ConstantStringType('CategoryEnum'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Sha256'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sha1'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('MacOS'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Command'),
                        new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Session'),
                        new \PHPStan\Type\Constant\ConstantStringType('Package'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfigurationSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendar'),
                        new \PHPStan\Type\Constant\ConstantStringType('Automation.ChangeTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProblemAnalysis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProblemAnalysisTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConformancePackTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuickSetup'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequireType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewer'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_REVIEWED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_REVIEWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createMaintenanceWindow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createOpsItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OpsItemId'),
                new \PHPStan\Type\Constant\ConstantStringType('OpsItemArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createOpsMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OpsMetadataArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPatchBaseline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createResourceDataSync(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteActivation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteInventory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeletionId'),
                new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionSummary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TotalCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('RemainingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('SummaryItems'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemainingCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteMaintenanceWindow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteOpsItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteOpsMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteParameter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeletedParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('InvalidParameters'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deletePatchBaseline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteResourceDataSync(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterManagedInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterPatchBaselineForPatchGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
                new \PHPStan\Type\Constant\ConstantStringType('PatchGroup'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deregisterTargetFromMaintenanceWindow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                new \PHPStan\Type\Constant\ConstantStringType('WindowTargetId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deregisterTaskFromMaintenanceWindow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                new \PHPStan\Type\Constant\ConstantStringType('WindowTaskId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeActivations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ActivationList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActivationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultInstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expired'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function describeAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssociationDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Date'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateAssociationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Overview'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationTargetParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComplianceSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncCompliance'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyOnlyAtCronInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('CalendarNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalInfo'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociationStatusAggregatedCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeAssociationExecutionTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssociationExecutionTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputSource'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OutputSourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputSourceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAssociationExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssociationExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceCountByStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAutomationExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutomationExecutionMetadataList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationExecutionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogFile'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentAutomationExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentStepName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResolvedTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLocationsURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationSubtype'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Runbooks'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeRequestName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Waiting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingApproval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Approved'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunbookInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingChangeCalendarOverride'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideApproved'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideRejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedWithSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedWithFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Exited'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Auto'),
                        new \PHPStan\Type\Constant\ConstantStringType('Interactive'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('Truncated'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CrossAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Local'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeRequest'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetParameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAutomationStepExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StepExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StepName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeoutSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('OnFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAttempts'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StepStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Inputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Response'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('StepExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OverriddenParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsEnd'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextStep'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsCritical'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidNextSteps'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentStepDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Waiting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingApproval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Approved'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunbookInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingChangeCalendarOverride'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideApproved'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideRejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedWithSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedWithFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Exited'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailureStage'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StepExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('StepName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iteration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IteratorValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
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
    private function describeAvailablePatches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Patches'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReleaseDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Vendor'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Product'),
                    new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                    new \PHPStan\Type\Constant\ConstantStringType('MsrcSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('KbNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('MsrcNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvisoryIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('BugzillaIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('CVEIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Epoch'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Release'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arch'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Repository'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
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
    private function describeDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Document'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Sha1'),
                    new \PHPStan\Type\Constant\ConstantStringType('Hash'),
                    new \PHPStan\Type\Constant\ConstantStringType('HashType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SchemaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentsInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Requires'),
                    new \PHPStan\Type\Constant\ConstantStringType('Author'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovedVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingReviewVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Category'),
                    new \PHPStan\Type\Constant\ConstantStringType('CategoryEnum'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Sha256'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sha1'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('MacOS'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Command'),
                        new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Session'),
                        new \PHPStan\Type\Constant\ConstantStringType('Package'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfigurationSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendar'),
                        new \PHPStan\Type\Constant\ConstantStringType('Automation.ChangeTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProblemAnalysis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProblemAnalysisTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConformancePackTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuickSetup'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequireType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewer'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_REVIEWED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_REVIEWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeDocumentPermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountIds'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountSharingInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharedDocumentVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEffectiveInstanceAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Associations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEffectivePatchesForPatchBaseline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EffectivePatches'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Patch'),
                    new \PHPStan\Type\Constant\ConstantStringType('PatchStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReleaseDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('Vendor'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('Product'),
                        new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                        new \PHPStan\Type\Constant\ConstantStringType('MsrcSeverity'),
                        new \PHPStan\Type\Constant\ConstantStringType('KbNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('MsrcNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdvisoryIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('BugzillaIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('CVEIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Epoch'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('Release'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arch'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Repository'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApprovalDate'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_APPROVAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPLICIT_APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPLICIT_REJECTED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeInstanceAssociationsStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceAssociationStatusInfos'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3OutputUrl'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OutputUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeInstanceInformation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceInformationList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PingStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastPingDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsLatestVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActivationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAssociationExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulAssociationExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationOverview'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Online'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionLost'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('MacOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManagedInstance'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2Instance'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceAssociationStatusAggregatedCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IoT::Thing'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SSM::ManagedInstance'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeInstancePatchStates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstancePatchStates'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PatchGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstallOverrideList'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstalledCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstalledOtherCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstalledPendingRebootCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstalledRejectedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnreportedNotApplicableCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotApplicableCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastNoRebootInstallOperationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('RebootOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('CriticalNonCompliantCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityNonCompliantCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('OtherNonCompliantCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Scan'),
                        new \PHPStan\Type\Constant\ConstantStringType('Install'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RebootIfNeeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoReboot'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeInstancePatchStatesForPatchGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstancePatchStates'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PatchGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstallOverrideList'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstalledCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstalledOtherCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstalledPendingRebootCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstalledRejectedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnreportedNotApplicableCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotApplicableCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastNoRebootInstallOperationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('RebootOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('CriticalNonCompliantCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityNonCompliantCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('OtherNonCompliantCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Scan'),
                        new \PHPStan\Type\Constant\ConstantStringType('Install'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RebootIfNeeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoReboot'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeInstancePatches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Patches'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('KBId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstalledTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CVEIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLED_OTHER'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLED_PENDING_REBOOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTALLED_REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeInstanceProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Architecture'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PingStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastPingDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActivationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegistrationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAssociationExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulAssociationExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationOverview'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Online'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionLost'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('MacOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceAssociationStatusAggregatedCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::IoT::Thing'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::SSM::ManagedInstance'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeInventoryDeletions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InventoryDeletions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastStatusUpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemainingCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('SummaryItems'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemainingCount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMaintenanceWindowExecutionTaskInvocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowExecutionTaskInvocationIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WindowExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvocationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('WindowTargetId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUN_COMMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED_OVERLAPPING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMaintenanceWindowExecutionTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowExecutionTaskIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WindowExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED_OVERLAPPING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUN_COMMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMaintenanceWindowExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WindowExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED_OVERLAPPING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMaintenanceWindowSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledWindowExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMaintenanceWindowTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WindowTargetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_GROUP'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMaintenanceWindowTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WindowTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CutoffBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUN_COMMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUE_TASK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_TASK'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMaintenanceWindows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cutoff'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleTimezone'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextExecutionTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMaintenanceWindowsForTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeOpsItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('OpsItemSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationalData'),
                    new \PHPStan\Type\Constant\ConstantStringType('Category'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlannedStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlannedEndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Open'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resolved'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedWithSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedWithFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunbookInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingChangeCalendarOverride'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideApproved'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideRejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingApproval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Approved'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SearchableString'),
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function describeParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedUser'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedPattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('String'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecureString'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Advanced'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intelligent-Tiering'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyText'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePatchBaselines(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BaselineIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BaselineName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingSystem'),
                    new \PHPStan\Type\Constant\ConstantStringType('BaselineDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultBaseline'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('UBUNTU'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDHAT_ENTERPRISE_LINUX'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CENTOS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE_LINUX'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEBIAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('MACOS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RASPBIAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALMA_LINUX'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2023'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePatchGroupState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesWithInstalledPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesWithInstalledOtherPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesWithInstalledPendingRebootPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesWithInstalledRejectedPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesWithMissingPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesWithFailedPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesWithNotApplicablePatches'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesWithUnreportedNotApplicablePatches'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesWithCriticalNonCompliantPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesWithSecurityNonCompliantPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesWithOtherNonCompliantPatches'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describePatchGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Mappings'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PatchGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('BaselineIdentity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BaselineName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OperatingSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('BaselineDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultBaseline'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2022'),
                            new \PHPStan\Type\Constant\ConstantStringType('UBUNTU'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDHAT_ENTERPRISE_LINUX'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CENTOS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORACLE_LINUX'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEBIAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACOS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RASPBIAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALMA_LINUX'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2023'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePatchProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Sessions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Connected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Connecting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disconnected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3OutputUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateOpsItemRelatedItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAutomationExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutomationExecution'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationExecutionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StepExecutions'),
                    new \PHPStan\Type\Constant\ConstantStringType('StepExecutionsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentAutomationExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentStepName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResolvedTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProgressCounters'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLocationsURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationSubtype'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Runbooks'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeRequestName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Waiting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingApproval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Approved'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunbookInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingChangeCalendarOverride'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideApproved'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideRejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedWithSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedWithFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Exited'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StepName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeoutSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxAttempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionEndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('StepStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('Response'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('StepExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OverriddenParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsEnd'),
                        new \PHPStan\Type\Constant\ConstantStringType('NextStep'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsCritical'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValidNextSteps'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentStepDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Waiting'),
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingApproval'),
                            new \PHPStan\Type\Constant\ConstantStringType('Approved'),
                            new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                            new \PHPStan\Type\Constant\ConstantStringType('RunbookInProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingChangeCalendarOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideApproved'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideRejected'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompletedWithSuccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompletedWithFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Exited'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FailureStage'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailureType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Details'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StepExecutionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('StepName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Action'),
                            new \PHPStan\Type\Constant\ConstantStringType('Iteration'),
                            new \PHPStan\Type\Constant\ConstantStringType('IteratorValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Auto'),
                        new \PHPStan\Type\Constant\ConstantStringType('Interactive'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('Truncated'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalSteps'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuccessSteps'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailedSteps'),
                        new \PHPStan\Type\Constant\ConstantStringType('CancelledSteps'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimedOutSteps'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeRequest'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetParameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                ]),
            ]),
        ]);
    }
    private function getCalendarState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('AtTime'),
                new \PHPStan\Type\Constant\ConstantStringType('NextTransitionTime'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                    new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCommandInvocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CommandId'),
                new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentName'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('PluginName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionStartDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionElapsedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionEndDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('StandardOutputContent'),
                new \PHPStan\Type\Constant\ConstantStringType('StandardOutputUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('StandardErrorContent'),
                new \PHPStan\Type\Constant\ConstantStringType('StandardErrorUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Delayed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getConnectionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Target'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('connected'),
                    new \PHPStan\Type\Constant\ConstantStringType('notconnected'),
                ]),
            ]),
        ]);
    }
    private function getDefaultPatchBaseline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
                new \PHPStan\Type\Constant\ConstantStringType('OperatingSystem'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2022'),
                    new \PHPStan\Type\Constant\ConstantStringType('UBUNTU'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDHAT_ENTERPRISE_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CENTOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORACLE_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEBIAN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MACOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('RASPBIAN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALMA_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2023'),
                ]),
            ]),
        ]);
    }
    private function getDeployablePatchSnapshotForInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotDownloadUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Product'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusInformation'),
                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('Requires'),
                new \PHPStan\Type\Constant\ConstantStringType('AttachmentsContent'),
                new \PHPStan\Type\Constant\ConstantStringType('ReviewStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Command'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Session'),
                    new \PHPStan\Type\Constant\ConstantStringType('Package'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfigurationSchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendar'),
                    new \PHPStan\Type\Constant\ConstantStringType('Automation.ChangeTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProblemAnalysis'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProblemAnalysisTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConformancePackTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuickSetup'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequireType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('Hash'),
                    new \PHPStan\Type\Constant\ConstantStringType('HashType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Sha256'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_REVIEWED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                ]),
            ]),
        ]);
    }
    private function getExecutionPreview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionPreviewId'),
                new \PHPStan\Type\Constant\ConstantStringType('EndedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionPreview'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StepPreviews'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetPreviews'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalAccounts'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Mutating'),
                            new \PHPStan\Type\Constant\ConstantStringType('NonMutating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Undetermined'),
                        ]), new \PHPStan\Type\IntegerType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getInventory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Data'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SchemaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CaptureTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getInventorySchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Schemas'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('string'),
                            new \PHPStan\Type\Constant\ConstantStringType('number'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMaintenanceWindow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                new \PHPStan\Type\Constant\ConstantStringType('EndDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleTimezone'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleOffset'),
                new \PHPStan\Type\Constant\ConstantStringType('NextExecutionTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                new \PHPStan\Type\Constant\ConstantStringType('Cutoff'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowUnassociatedTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getMaintenanceWindowExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskIds'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED_OVERLAPPING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getMaintenanceWindowExecutionTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUN_COMMAND'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]))),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED_OVERLAPPING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getMaintenanceWindowExecutionTaskInvocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('InvocationId'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskType'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerInformation'),
                new \PHPStan\Type\Constant\ConstantStringType('WindowTargetId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUN_COMMAND'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED_OVERLAPPING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMaintenanceWindowTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                new \PHPStan\Type\Constant\ConstantStringType('WindowTaskId'),
                new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskType'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskInvocationParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CutoffBehavior'),
                new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUN_COMMAND'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FUNCTIONS'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RunCommand'),
                    new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                    new \PHPStan\Type\Constant\ConstantStringType('StepFunctions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentHashType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeoutSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sha256'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sha1'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NotificationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotificationEvents'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('All'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Command'),
                                new \PHPStan\Type\Constant\ConstantStringType('Invocation'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Input'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClientContext'),
                        new \PHPStan\Type\Constant\ConstantStringType('Qualifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Payload'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Region'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONTINUE_TASK'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_TASK'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getOpsItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OpsItem'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Notifications'),
                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelatedOpsItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationalData'),
                    new \PHPStan\Type\Constant\ConstantStringType('Category'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlannedStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlannedEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OpsItemId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Open'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resolved'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedWithSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedWithFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunbookInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingChangeCalendarOverride'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideApproved'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendarOverrideRejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingApproval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Approved'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Closed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SearchableString'),
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getOpsMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getOpsSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Data'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CaptureTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getParameter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parameter'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('String'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecureString'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getParameterHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedUser'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedPattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('String'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecureString'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('Advanced'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intelligent-Tiering'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyText'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('InvalidParameters'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('String'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecureString'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getParametersByPath(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('String'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecureString'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPatchBaseline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('OperatingSystem'),
                new \PHPStan\Type\Constant\ConstantStringType('GlobalFilters'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovalRules'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovedPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovedPatchesComplianceLevel'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovedPatchesEnableNonSecurity'),
                new \PHPStan\Type\Constant\ConstantStringType('RejectedPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('RejectedPatchesAction'),
                new \PHPStan\Type\Constant\ConstantStringType('PatchGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Sources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2022'),
                    new \PHPStan\Type\Constant\ConstantStringType('UBUNTU'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDHAT_ENTERPRISE_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CENTOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORACLE_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEBIAN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MACOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('RASPBIAN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALMA_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2023'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PatchFilters'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ARCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADVISORY_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUGZILLA_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('PATCH_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRODUCT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRODUCT_FAMILY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLASSIFICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CVE_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('EPOCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MSRC_SEVERITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PATCH_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIORITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('RELEASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEVERITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PatchRules'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PatchFilterGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApproveAfterDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApproveUntilDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableNonSecurity'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PatchFilters'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ADVISORY_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BUGZILLA_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH_SET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRODUCT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRODUCT_FAMILY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLASSIFICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CVE_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EPOCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MSRC_SEVERITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRIORITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RELEASE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SEVERITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW_AS_DEPENDENCY'),
                    new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Products'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getPatchBaselineForPatchGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
                new \PHPStan\Type\Constant\ConstantStringType('PatchGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('OperatingSystem'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2022'),
                    new \PHPStan\Type\Constant\ConstantStringType('UBUNTU'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDHAT_ENTERPRISE_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CENTOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORACLE_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEBIAN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MACOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('RASPBIAN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALMA_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2023'),
                ]),
            ]),
        ]);
    }
    private function getResourcePolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyHash'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getServiceSetting(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceSetting'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SettingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SettingValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedUser'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function labelParameterVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvalidLabels'),
                new \PHPStan\Type\Constant\ConstantStringType('ParameterVersion'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listAssociationVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssociationVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComplianceSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncCompliance'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyOnlyAtCronInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('CalendarNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Associations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Overview'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociationStatusAggregatedCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCommandInvocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CommandInvocations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CommandId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('TraceOutput'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardOutputUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardErrorUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CommandPlugins'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Delayed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResponseStartDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResponseFinishDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Output'),
                        new \PHPStan\Type\Constant\ConstantStringType('StandardOutputUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('StandardErrorUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputS3Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationEvents'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('All'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Command'),
                            new \PHPStan\Type\Constant\ConstantStringType('Invocation'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCommands(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Commands'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CommandId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiresAfter'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputS3Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryTimedOutCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeoutSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationEvents'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('All'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Command'),
                            new \PHPStan\Type\Constant\ConstantStringType('Invocation'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listComplianceItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComplianceItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ComplianceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Details'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLIANT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_COMPLIANT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionType'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listComplianceSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComplianceSummaryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ComplianceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompliantSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('NonCompliantSummary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompliantCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('SeveritySummary'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CriticalCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediumCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('LowCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('InformationalCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnspecifiedCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NonCompliantCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('SeveritySummary'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CriticalCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediumCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('LowCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('InformationalCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnspecifiedCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDocumentMetadataHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Author'),
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewerResponse'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewer'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_REVIEWED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDocumentVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefaultVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_REVIEWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDocuments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentIdentifiers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SchemaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('Requires'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Author'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('MacOS'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Command'),
                        new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Session'),
                        new \PHPStan\Type\Constant\ConstantStringType('Package'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfigurationSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendar'),
                        new \PHPStan\Type\Constant\ConstantStringType('Automation.ChangeTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProblemAnalysis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProblemAnalysisTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConformancePackTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuickSetup'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequireType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_REVIEWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInventoryEntries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('SchemaVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('CaptureTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Entries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNodes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Nodes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CaptureTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Instance'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AgentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('AgentVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManagedStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformType'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformName'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('All'),
                                new \PHPStan\Type\Constant\ConstantStringType('Managed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unmanaged'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                                new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                                new \PHPStan\Type\Constant\ConstantStringType('MacOS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ManagedInstance'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2Instance'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNodesSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summary'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOpsItemEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Summaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Detail'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listOpsItemRelatedItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Summaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listOpsMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OpsMetadataList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsMetadataArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedUser'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceComplianceSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceComplianceSummaryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ComplianceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('OverallSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompliantSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('NonCompliantSummary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLIANT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_COMPLIANT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionType'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompliantCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('SeveritySummary'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CriticalCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediumCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('LowCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('InformationalCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnspecifiedCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NonCompliantCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('SeveritySummary'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CriticalCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediumCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('LowCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('InformationalCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnspecifiedCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceDataSync(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceDataSyncItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SyncName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSyncTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulSyncTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncLastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncCreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSyncStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsOrganizationsSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceRegions'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeFutureRegions'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableAllOpsDataSources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationSourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnits'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('SyncFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDataSharing'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('JsonSerDe'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationDataSharingType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\Constant\ConstantStringType('TagList'),
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
    private function modifyDocumentPermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putComplianceItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putInventory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putParameter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('Tier'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                    new \PHPStan\Type\Constant\ConstantStringType('Advanced'),
                    new \PHPStan\Type\Constant\ConstantStringType('Intelligent-Tiering'),
                ]),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyHash'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerDefaultPatchBaseline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerPatchBaselineForPatchGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
                new \PHPStan\Type\Constant\ConstantStringType('PatchGroup'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerTargetWithMaintenanceWindow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowTargetId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerTaskWithMaintenanceWindow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowTaskId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeTagsFromResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function resetServiceSetting(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceSetting'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SettingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SettingValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedUser'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function resumeSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('TokenValue'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamUrl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendAutomationSignal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendCommand(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Command'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CommandId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpiresAfter'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputS3Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryTimedOutCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeoutSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationEvents'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('All'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Command'),
                            new \PHPStan\Type\Constant\ConstantStringType('Invocation'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function startAssociationsOnce(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startAutomationExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutomationExecutionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startChangeRequestExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutomationExecutionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startExecutionPreview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionPreviewId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('TokenValue'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamUrl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopAutomationExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function terminateSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function unlabelParameterVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RemovedLabels'),
                new \PHPStan\Type\Constant\ConstantStringType('InvalidLabels'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssociationDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Date'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateAssociationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Overview'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationTargetParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComplianceSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncCompliance'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyOnlyAtCronInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('CalendarNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalInfo'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociationStatusAggregatedCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateAssociationStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AssociationDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Date'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateAssociationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Overview'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomationTargetParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulExecutionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComplianceSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncCompliance'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyOnlyAtCronInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('CalendarNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetMaps'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TriggeredAlarms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalInfo'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociationStatusAggregatedCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationMaxErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetLocationAlarmConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeChildOrganizationUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludeAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetsMaxErrors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Sha1'),
                    new \PHPStan\Type\Constant\ConstantStringType('Hash'),
                    new \PHPStan\Type\Constant\ConstantStringType('HashType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SchemaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentsInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Requires'),
                    new \PHPStan\Type\Constant\ConstantStringType('Author'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApprovedVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingReviewVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReviewStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Category'),
                    new \PHPStan\Type\Constant\ConstantStringType('CategoryEnum'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Sha256'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sha1'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('MacOS'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Command'),
                        new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Session'),
                        new \PHPStan\Type\Constant\ConstantStringType('Package'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfigurationSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeCalendar'),
                        new \PHPStan\Type\Constant\ConstantStringType('Automation.ChangeTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProblemAnalysis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProblemAnalysisTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConformancePackTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('QuickSetup'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequireType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReviewedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reviewer'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_REVIEWED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_REVIEWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateDocumentDefaultVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultVersionName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateDocumentMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateMaintenanceWindow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                new \PHPStan\Type\Constant\ConstantStringType('EndDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleTimezone'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleOffset'),
                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                new \PHPStan\Type\Constant\ConstantStringType('Cutoff'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowUnassociatedTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function updateMaintenanceWindowTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                new \PHPStan\Type\Constant\ConstantStringType('WindowTargetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerInformation'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateMaintenanceWindowTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WindowId'),
                new \PHPStan\Type\Constant\ConstantStringType('WindowTaskId'),
                new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskInvocationParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxErrors'),
                new \PHPStan\Type\Constant\ConstantStringType('LoggingInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CutoffBehavior'),
                new \PHPStan\Type\Constant\ConstantStringType('AlarmConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RunCommand'),
                    new \PHPStan\Type\Constant\ConstantStringType('Automation'),
                    new \PHPStan\Type\Constant\ConstantStringType('StepFunctions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentHashType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputS3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputS3KeyPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeoutSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchOutputEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sha256'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sha1'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NotificationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotificationEvents'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('All'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Command'),
                                new \PHPStan\Type\Constant\ConstantStringType('Invocation'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Input'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClientContext'),
                        new \PHPStan\Type\Constant\ConstantStringType('Qualifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Payload'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Region'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONTINUE_TASK'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_TASK'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IgnorePollAlarmFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateManagedInstanceRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateOpsItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateOpsMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OpsMetadataArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updatePatchBaseline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BaselineId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('OperatingSystem'),
                new \PHPStan\Type\Constant\ConstantStringType('GlobalFilters'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovalRules'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovedPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovedPatchesComplianceLevel'),
                new \PHPStan\Type\Constant\ConstantStringType('ApprovedPatchesEnableNonSecurity'),
                new \PHPStan\Type\Constant\ConstantStringType('RejectedPatches'),
                new \PHPStan\Type\Constant\ConstantStringType('RejectedPatchesAction'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Sources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2022'),
                    new \PHPStan\Type\Constant\ConstantStringType('UBUNTU'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDHAT_ENTERPRISE_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CENTOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORACLE_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEBIAN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MACOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('RASPBIAN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALMA_LINUX'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX_2023'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PatchFilters'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ARCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADVISORY_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUGZILLA_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('PATCH_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRODUCT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRODUCT_FAMILY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLASSIFICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CVE_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('EPOCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MSRC_SEVERITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PATCH_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIORITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('RELEASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEVERITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PatchRules'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PatchFilterGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApproveAfterDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApproveUntilDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableNonSecurity'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PatchFilters'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ARCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ADVISORY_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BUGZILLA_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH_SET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRODUCT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRODUCT_FAMILY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLASSIFICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CVE_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EPOCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MSRC_SEVERITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRIORITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RELEASE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SEVERITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW_AS_DEPENDENCY'),
                    new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Products'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateResourceDataSync(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateServiceSetting(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}