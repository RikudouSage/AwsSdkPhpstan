<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SecurityHubClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SecurityHub\SecurityHubClient>
     */
    public function getClass(): string
    {
        return \Aws\SecurityHub\SecurityHubClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptAdministratorInvitation',
            'acceptInvitation',
            'batchDeleteAutomationRules',
            'batchDisableStandards',
            'batchEnableStandards',
            'batchGetAutomationRules',
            'batchGetConfigurationPolicyAssociations',
            'batchGetSecurityControls',
            'batchGetStandardsControlAssociations',
            'batchImportFindings',
            'batchUpdateAutomationRules',
            'batchUpdateFindings',
            'batchUpdateStandardsControlAssociations',
            'createActionTarget',
            'createAutomationRule',
            'createConfigurationPolicy',
            'createFindingAggregator',
            'createInsight',
            'createMembers',
            'declineInvitations',
            'deleteActionTarget',
            'deleteConfigurationPolicy',
            'deleteFindingAggregator',
            'deleteInsight',
            'deleteInvitations',
            'deleteMembers',
            'describeActionTargets',
            'describeHub',
            'describeOrganizationConfiguration',
            'describeProducts',
            'describeStandards',
            'describeStandardsControls',
            'disableImportFindingsForProduct',
            'disableOrganizationAdminAccount',
            'disableSecurityHub',
            'disassociateFromAdministratorAccount',
            'disassociateFromMasterAccount',
            'disassociateMembers',
            'enableImportFindingsForProduct',
            'enableOrganizationAdminAccount',
            'enableSecurityHub',
            'getAdministratorAccount',
            'getConfigurationPolicy',
            'getConfigurationPolicyAssociation',
            'getEnabledStandards',
            'getFindingAggregator',
            'getFindingHistory',
            'getFindings',
            'getInsightResults',
            'getInsights',
            'getInvitationsCount',
            'getMasterAccount',
            'getMembers',
            'getSecurityControlDefinition',
            'inviteMembers',
            'listAutomationRules',
            'listConfigurationPolicies',
            'listConfigurationPolicyAssociations',
            'listEnabledProductsForImport',
            'listFindingAggregators',
            'listInvitations',
            'listMembers',
            'listOrganizationAdminAccounts',
            'listSecurityControlDefinitions',
            'listStandardsControlAssociations',
            'listTagsForResource',
            'startConfigurationPolicyAssociation',
            'startConfigurationPolicyDisassociation',
            'tagResource',
            'untagResource',
            'updateActionTarget',
            'updateConfigurationPolicy',
            'updateFindingAggregator',
            'updateFindings',
            'updateInsight',
            'updateOrganizationConfiguration',
            'updateSecurityControl',
            'updateSecurityHubConfiguration',
            'updateStandardsControl',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptAdministratorInvitation' => $this->acceptAdministratorInvitation(),
            'acceptInvitation' => $this->acceptInvitation(),
            'batchDeleteAutomationRules' => $this->batchDeleteAutomationRules(),
            'batchDisableStandards' => $this->batchDisableStandards(),
            'batchEnableStandards' => $this->batchEnableStandards(),
            'batchGetAutomationRules' => $this->batchGetAutomationRules(),
            'batchGetConfigurationPolicyAssociations' => $this->batchGetConfigurationPolicyAssociations(),
            'batchGetSecurityControls' => $this->batchGetSecurityControls(),
            'batchGetStandardsControlAssociations' => $this->batchGetStandardsControlAssociations(),
            'batchImportFindings' => $this->batchImportFindings(),
            'batchUpdateAutomationRules' => $this->batchUpdateAutomationRules(),
            'batchUpdateFindings' => $this->batchUpdateFindings(),
            'batchUpdateStandardsControlAssociations' => $this->batchUpdateStandardsControlAssociations(),
            'createActionTarget' => $this->createActionTarget(),
            'createAutomationRule' => $this->createAutomationRule(),
            'createConfigurationPolicy' => $this->createConfigurationPolicy(),
            'createFindingAggregator' => $this->createFindingAggregator(),
            'createInsight' => $this->createInsight(),
            'createMembers' => $this->createMembers(),
            'declineInvitations' => $this->declineInvitations(),
            'deleteActionTarget' => $this->deleteActionTarget(),
            'deleteConfigurationPolicy' => $this->deleteConfigurationPolicy(),
            'deleteFindingAggregator' => $this->deleteFindingAggregator(),
            'deleteInsight' => $this->deleteInsight(),
            'deleteInvitations' => $this->deleteInvitations(),
            'deleteMembers' => $this->deleteMembers(),
            'describeActionTargets' => $this->describeActionTargets(),
            'describeHub' => $this->describeHub(),
            'describeOrganizationConfiguration' => $this->describeOrganizationConfiguration(),
            'describeProducts' => $this->describeProducts(),
            'describeStandards' => $this->describeStandards(),
            'describeStandardsControls' => $this->describeStandardsControls(),
            'disableImportFindingsForProduct' => $this->disableImportFindingsForProduct(),
            'disableOrganizationAdminAccount' => $this->disableOrganizationAdminAccount(),
            'disableSecurityHub' => $this->disableSecurityHub(),
            'disassociateFromAdministratorAccount' => $this->disassociateFromAdministratorAccount(),
            'disassociateFromMasterAccount' => $this->disassociateFromMasterAccount(),
            'disassociateMembers' => $this->disassociateMembers(),
            'enableImportFindingsForProduct' => $this->enableImportFindingsForProduct(),
            'enableOrganizationAdminAccount' => $this->enableOrganizationAdminAccount(),
            'enableSecurityHub' => $this->enableSecurityHub(),
            'getAdministratorAccount' => $this->getAdministratorAccount(),
            'getConfigurationPolicy' => $this->getConfigurationPolicy(),
            'getConfigurationPolicyAssociation' => $this->getConfigurationPolicyAssociation(),
            'getEnabledStandards' => $this->getEnabledStandards(),
            'getFindingAggregator' => $this->getFindingAggregator(),
            'getFindingHistory' => $this->getFindingHistory(),
            'getFindings' => $this->getFindings(),
            'getInsightResults' => $this->getInsightResults(),
            'getInsights' => $this->getInsights(),
            'getInvitationsCount' => $this->getInvitationsCount(),
            'getMasterAccount' => $this->getMasterAccount(),
            'getMembers' => $this->getMembers(),
            'getSecurityControlDefinition' => $this->getSecurityControlDefinition(),
            'inviteMembers' => $this->inviteMembers(),
            'listAutomationRules' => $this->listAutomationRules(),
            'listConfigurationPolicies' => $this->listConfigurationPolicies(),
            'listConfigurationPolicyAssociations' => $this->listConfigurationPolicyAssociations(),
            'listEnabledProductsForImport' => $this->listEnabledProductsForImport(),
            'listFindingAggregators' => $this->listFindingAggregators(),
            'listInvitations' => $this->listInvitations(),
            'listMembers' => $this->listMembers(),
            'listOrganizationAdminAccounts' => $this->listOrganizationAdminAccounts(),
            'listSecurityControlDefinitions' => $this->listSecurityControlDefinitions(),
            'listStandardsControlAssociations' => $this->listStandardsControlAssociations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startConfigurationPolicyAssociation' => $this->startConfigurationPolicyAssociation(),
            'startConfigurationPolicyDisassociation' => $this->startConfigurationPolicyDisassociation(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateActionTarget' => $this->updateActionTarget(),
            'updateConfigurationPolicy' => $this->updateConfigurationPolicy(),
            'updateFindingAggregator' => $this->updateFindingAggregator(),
            'updateFindings' => $this->updateFindings(),
            'updateInsight' => $this->updateInsight(),
            'updateOrganizationConfiguration' => $this->updateOrganizationConfiguration(),
            'updateSecurityControl' => $this->updateSecurityControl(),
            'updateSecurityHubConfiguration' => $this->updateSecurityHubConfiguration(),
            'updateStandardsControl' => $this->updateStandardsControl(),
        };
    }
    private function acceptAdministratorInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function acceptInvitation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function batchDeleteAutomationRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProcessedAutomationRules'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAutomationRules'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchDisableStandards(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StandardsSubscriptions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsSubscriptionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsInput'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsStatusReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReasonCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_AVAILABLE_CONFIGURATION_RECORDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchEnableStandards(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StandardsSubscriptions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsSubscriptionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsInput'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsStatusReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReasonCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_AVAILABLE_CONFIGURATION_RECORDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchGetAutomationRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAutomationRules'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleOrder'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTerminal'),
                    new \PHPStan\Type\Constant\ConstantStringType('Criteria'),
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProductArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('GeneratorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('FirstObservedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastObservedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Criticality'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompanyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SeverityLabel'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourcePartition'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceDetailsOther'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceSecurityControlId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceAssociatedStandardsId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerificationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkflowStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecordState'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedFindingsProductArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedFindingsId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoteText'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoteUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoteUpdatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserDefinedFields'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceApplicationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceApplicationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsAccountName'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingFieldsUpdate'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('FINDING_FIELDS_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Note'),
                            new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                            new \PHPStan\Type\Constant\ConstantStringType('VerificationState'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                            new \PHPStan\Type\Constant\ConstantStringType('Criticality'),
                            new \PHPStan\Type\Constant\ConstantStringType('Types'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserDefinedFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('Workflow'),
                            new \PHPStan\Type\Constant\ConstantStringType('RelatedFindings'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('UpdatedBy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Normalized'),
                                new \PHPStan\Type\Constant\ConstantStringType('Product'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRUE_POSITIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FALSE_POSITIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BENIGN_POSITIVE'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOTIFIED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUPPRESSED'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProductArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetConfigurationPolicyAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationPolicyAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedConfigurationPolicyAssociations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationPolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONAL_UNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROOT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INHERITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLIED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationPolicyAssociationIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorReason'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RootId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetSecurityControls(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityControls'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedIds'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityControlArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('RemediationUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SeverityRating'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityControlStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Integer'),
                            new \PHPStan\Type\Constant\ConstantStringType('IntegerList'),
                            new \PHPStan\Type\Constant\ConstantStringType('Double'),
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                            new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                            new \PHPStan\Type\Constant\ConstantStringType('Enum'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnumList'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_INPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetStandardsControlAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StandardsControlAssociationDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAssociations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityControlArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelatedRequirements'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsControlTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsControlDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsControlArns'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsControlAssociationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorReason'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                        new \PHPStan\Type\Constant\ConstantStringType('StandardsArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_INPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchImportFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedCount'),
                new \PHPStan\Type\Constant\ConstantStringType('SuccessCount'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedFindings'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchUpdateAutomationRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProcessedAutomationRules'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAutomationRules'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchUpdateFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProcessedFindings'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedFindings'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FindingIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchUpdateStandardsControlAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAssociationUpdates'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsControlAssociationUpdate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorReason'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StandardsArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_INPUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createActionTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ActionTargetArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAutomationRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConfigurationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationPolicy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityHub'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnabledStandardIdentifiers'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityControlsConfiguration'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EnabledSecurityControlIdentifiers'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisabledSecurityControlIdentifiers'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityControlCustomParameters'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Integer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IntegerList'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Double'),
                                        new \PHPStan\Type\Constant\ConstantStringType('String'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enum'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EnumList'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ])),
                            ])),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createFindingAggregator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FindingAggregatorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FindingAggregationRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('RegionLinkingMode'),
                new \PHPStan\Type\Constant\ConstantStringType('Regions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createInsight(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InsightArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessingResult'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function declineInvitations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessingResult'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function deleteActionTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ActionTargetArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteConfigurationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteFindingAggregator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteInsight(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InsightArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteInvitations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessingResult'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function deleteMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessingResult'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeActionTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ActionTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActionTargetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
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
    private function describeHub(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HubArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SubscribedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoEnableControls'),
                new \PHPStan\Type\Constant\ConstantStringType('ControlFindingGenerator'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_CONTROL'),
                    new \PHPStan\Type\Constant\ConstantStringType('SECURITY_CONTROL'),
                ]),
            ]),
        ]);
    }
    private function describeOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoEnable'),
                new \PHPStan\Type\Constant\ConstantStringType('MemberAccountLimitReached'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoEnableStandards'),
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationConfiguration'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CENTRAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeProducts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Products'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProductArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompanyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('MarketplaceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActivationUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductSubscriptionResourcePolicy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SEND_FINDINGS_TO_SECURITY_HUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECEIVE_FINDINGS_FROM_SECURITY_HUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FINDINGS_IN_SECURITY_HUB'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeStandards(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Standards'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledByDefault'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsManagedBy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Company'),
                        new \PHPStan\Type\Constant\ConstantStringType('Product'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeStandardsControls(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Controls'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsControlArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ControlStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('ControlStatusUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ControlId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('RemediationUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SeverityRating'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelatedRequirements'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disableImportFindingsForProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disableOrganizationAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disableSecurityHub(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateFromAdministratorAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateFromMasterAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableImportFindingsForProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProductSubscriptionArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function enableOrganizationAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableSecurityHub(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAdministratorAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Administrator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getConfigurationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationPolicy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityHub'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnabledStandardIdentifiers'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityControlsConfiguration'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EnabledSecurityControlIdentifiers'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisabledSecurityControlIdentifiers'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityControlCustomParameters'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Integer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IntegerList'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Double'),
                                        new \PHPStan\Type\Constant\ConstantStringType('String'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enum'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EnumList'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ])),
                            ])),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getConfigurationPolicyAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationPolicyId'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetId'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                new \PHPStan\Type\Constant\ConstantStringType('AssociationType'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AssociationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('AssociationStatusMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONAL_UNIT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROOT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INHERITED'),
                    new \PHPStan\Type\Constant\ConstantStringType('APPLIED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEnabledStandards(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StandardsSubscriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsSubscriptionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsInput'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsStatusReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReasonCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_AVAILABLE_CONFIGURATION_RECORDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFindingAggregator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FindingAggregatorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FindingAggregationRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('RegionLinkingMode'),
                new \PHPStan\Type\Constant\ConstantStringType('Regions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getFindingHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Records'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FindingIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FindingCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Updates'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Identity'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BATCH_UPDATE_FINDINGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BATCH_IMPORT_FINDINGS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedField'),
                        new \PHPStan\Type\Constant\ConstantStringType('OldValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewValue'),
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
    private function getFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Findings'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SchemaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompanyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeneratorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Types'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirstObservedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastObservedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Criticality'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Remediation'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserDefinedFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('Malware'),
                    new \PHPStan\Type\Constant\ConstantStringType('Network'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('Process'),
                    new \PHPStan\Type\Constant\ConstantStringType('Threats'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThreatIntelIndicators'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Compliance'),
                    new \PHPStan\Type\Constant\ConstantStringType('VerificationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkflowState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Workflow'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordState'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelatedFindings'),
                    new \PHPStan\Type\Constant\ConstantStringType('Note'),
                    new \PHPStan\Type\Constant\ConstantStringType('Vulnerabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('PatchSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('FindingProviderFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sample'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeneratorDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsAccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Detection'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Product'),
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Normalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Original'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Recommendation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ADWARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BLENDED_THREAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOTNET_AGENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('COIN_MINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPLOIT_KIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEYLOGGER'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACRO'),
                            new \PHPStan\Type\Constant\ConstantStringType('POTENTIALLY_UNWANTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPYWARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RANSOMWARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOTE_ACCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROOTKIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TROJAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIRUS'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OBSERVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenPortRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceIpV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceIpV6'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourcePort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceDomain'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceMac'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationIpV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationIpV6'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationDomain'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('OUT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Begin'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ComponentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComponentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Egress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ingress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Begin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Begin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Begin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('PortRanges'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Begin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pid'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentPid'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('TerminatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilePaths'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FilePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('FileName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Hash'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastObservedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceUrl'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('HASH_MD5'),
                            new \PHPStan\Type\Constant\ConstantStringType('HASH_SHA1'),
                            new \PHPStan\Type\Constant\ConstantStringType('HASH_SHA256'),
                            new \PHPStan\Type\Constant\ConstantStringType('HASH_SHA512'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV6_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MUTEX'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BACKDOOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CARD_STEALER'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMMAND_AND_CONTROL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DROP_SITE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPLOIT_SITE'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEYLOGGER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Partition'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataClassification'),
                        new \PHPStan\Type\Constant\ConstantStringType('Details'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('aws'),
                            new \PHPStan\Type\Constant\ConstantStringType('aws-cn'),
                            new \PHPStan\Type\Constant\ConstantStringType('aws-us-gov'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DetailedResultsLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Result'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MimeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SizeClassified'),
                                new \PHPStan\Type\Constant\ConstantStringType('AdditionalOccurrences'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('SensitiveData'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomDataIdentifiers'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Category'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Detections'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TotalCount'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Occurrences'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LineRanges'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OffsetRanges'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Records'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Start'),
                                                new \PHPStan\Type\Constant\ConstantStringType('End'),
                                                new \PHPStan\Type\Constant\ConstantStringType('StartColumn'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Start'),
                                                new \PHPStan\Type\Constant\ConstantStringType('End'),
                                                new \PHPStan\Type\Constant\ConstantStringType('StartColumn'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('PageNumber'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LineRange'),
                                                new \PHPStan\Type\Constant\ConstantStringType('OffsetRange'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Start'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('StartColumn'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Start'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('StartColumn'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('JsonPath'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RecordIndex'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Column'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Row'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ColumnName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CellReference'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Detections'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TotalCount'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Occurrences'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LineRanges'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OffsetRanges'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Records'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Start'),
                                                new \PHPStan\Type\Constant\ConstantStringType('End'),
                                                new \PHPStan\Type\Constant\ConstantStringType('StartColumn'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Start'),
                                                new \PHPStan\Type\Constant\ConstantStringType('End'),
                                                new \PHPStan\Type\Constant\ConstantStringType('StartColumn'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('PageNumber'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LineRange'),
                                                new \PHPStan\Type\Constant\ConstantStringType('OffsetRange'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Start'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('StartColumn'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Start'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('StartColumn'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('JsonPath'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RecordIndex'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Column'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Row'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ColumnName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CellReference'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAutoScalingAutoScalingGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsCodeBuildProject'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsCloudFrontDistribution'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2Instance'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2NetworkInterface'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2SecurityGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2Volume'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2Vpc'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2Eip'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2Subnet'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2NetworkAcl'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsElbv2LoadBalancer'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsElasticBeanstalkEnvironment'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsElasticsearchDomain'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsS3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsS3AccountPublicAccessBlock'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsS3Object'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsSecretsManagerSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsIamAccessKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsIamUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsIamPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsApiGatewayV2Stage'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsApiGatewayV2Api'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsDynamoDbTable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsApiGatewayStage'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsApiGatewayRestApi'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsCloudTrailTrail'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsSsmPatchCompliance'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsCertificateManagerCertificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsRedshiftCluster'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsElbLoadBalancer'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsIamGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsIamRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsKmsKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsLambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsLambdaLayerVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsRdsDbInstance'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsSnsTopic'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsSqsQueue'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsWafWebAcl'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsRdsDbSnapshot'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsRdsDbClusterSnapshot'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsRdsDbCluster'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEcsCluster'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEcsContainer'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEcsTaskDefinition'),
                            new \PHPStan\Type\Constant\ConstantStringType('Container'),
                            new \PHPStan\Type\Constant\ConstantStringType('Other'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsRdsEventSubscription'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEcsService'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAutoScalingLaunchConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2VpnConnection'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEcrContainerImage'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsOpenSearchServiceDomain'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2VpcEndpointService'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsXrayEncryptionConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsWafRateBasedRule'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsWafRegionalRateBasedRule'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEcrRepository'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEksCluster'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsNetworkFirewallFirewallPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsNetworkFirewallFirewall'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsNetworkFirewallRuleGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsRdsDbSecurityGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsKinesisStream'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2TransitGateway'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEfsAccessPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsCloudFormationStack'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsCloudWatchAlarm'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2VpcPeeringConnection'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsWafRegionalRuleGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsWafRegionalRule'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsWafRegionalWebAcl'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsWafRule'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsWafRuleGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEcsTask'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsBackupBackupVault'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsBackupBackupPlan'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsBackupRecoveryPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2LaunchTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsSageMakerNotebookInstance'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsWafv2WebAcl'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsWafv2RuleGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2RouteTable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAmazonMqBroker'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAppSyncGraphQlApi'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEventSchemasRegistry'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsGuardDutyDetector'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsStepFunctionStateMachine'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAthenaWorkGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEventsEventbus'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsDmsEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEventsEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsDmsReplicationTask'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsDmsReplicationInstance'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsRoute53HostedZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsMskCluster'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsS3AccessPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsEc2ClientVpnEndpoint'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchConfigurationName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('HealthCheckType'),
                                new \PHPStan\Type\Constant\ConstantStringType('HealthCheckGracePeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('MixedInstancesPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplate'),
                                new \PHPStan\Type\Constant\ConstantStringType('CapacityRebalance'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('InstancesDistribution'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplate'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandAllocationStrategy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandBaseCapacity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandPercentageAboveBaseCapacity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SpotAllocationStrategy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SpotInstancePools'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SpotMaxPrice'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateSpecification'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Overrides'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WeightedCapacity'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('Artifacts'),
                                new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogsConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecondaryArtifacts'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NamespaceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OverrideArtifactName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Packaging'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PrivilegedMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ImagePullCredentialsType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RegistryCredential'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Credential'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CredentialProvider'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GitCloneDepth'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InsecureSsl'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3Logs'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionDisabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionDisabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NamespaceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OverrideArtifactName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Packaging'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultRootObject'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                                new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('WebAclId'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeCookies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HttpPort'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HttpsPort'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AcmCertificateArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IamCertificateId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SslSupportMethod'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                                new \PHPStan\Type\Constant\ConstantStringType('IpV4Addresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('IpV6Addresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamInstanceProfileArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                                new \PHPStan\Type\Constant\ConstantStringType('VirtualizationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetadataOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Monitoring'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HttpEndpoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HttpProtocolIpv6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HttpPutResponseHopLimit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HttpTokens'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceMetadataTags'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceDestCheck'),
                                new \PHPStan\Type\Constant\ConstantStringType('IpV6Addresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicDnsName'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIp'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttachTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeleteOnTermination'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeviceIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceOwnerId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IpV6Address'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PrivateDnsName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('IpPermissions'),
                                new \PHPStan\Type\Constant\ConstantStringType('IpPermissionsEgress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IpProtocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserIdGroupPairs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IpRanges'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6Ranges'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PrefixListIds'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PeeringStatus'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VpcPeeringConnectionId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CidrIp'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CidrIpv6'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PrefixListId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IpProtocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserIdGroupPairs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IpRanges'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6Ranges'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PrefixListIds'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PeeringStatus'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VpcPeeringConnectionId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CidrIp'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CidrIpv6'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PrefixListId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('Size'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Attachments'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeScanStatus'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttachTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeleteOnTermination'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CidrBlockAssociationSet'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlockAssociationSet'),
                                new \PHPStan\Type\Constant\ConstantStringType('DhcpOptionsId'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlockState'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlockState'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIp'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllocationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIpv4Pool'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkBorderGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceOwnerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
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
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssignIpv6AddressOnCreation'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneId'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailableIpAddressCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultForAz'),
                                new \PHPStan\Type\Constant\ConstantStringType('MapPublicIpOnLaunch'),
                                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlockAssociationSet'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AssociationId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlockState'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkAclId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Associations'),
                                new \PHPStan\Type\Constant\ConstantStringType('Entries'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NetworkAclAssociationId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NetworkAclId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Egress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IcmpTypeCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PortRange'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleAction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleNumber'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('From'),
                                        new \PHPStan\Type\Constant\ConstantStringType('To'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                                new \PHPStan\Type\Constant\ConstantStringType('CanonicalHostedZoneId'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('DNSName'),
                                new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Scheme'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerAttributes'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ZoneName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cname'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                                new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndpointUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentLinks'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OptionSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                                new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LinkName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OptionName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessPolicies'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainEndpointOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                                new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchClusterConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeToNodeEncryptionOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceSoftwareOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPCOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnforceHTTPS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLSSecurityPolicy'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessEnabled'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneCount'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexSlowLogs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SearchSlowLogs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AuditLogs'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedUpdateDate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cancellable'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NewVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UpdateAvailable'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OwnerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketLifecycleConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicAccessBlockConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessControlList'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketLoggingConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketWebsiteConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketNotificationConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketVersioningConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectLockConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ApplyServerSideEncryptionByDefault'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSEAlgorithm'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyID'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AbortIncompleteMultipartUpload'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExpirationDate'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExpirationInDays'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExpiredObjectDeleteMarker'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NoncurrentVersionExpirationInDays'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NoncurrentVersionTransitions'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Transitions'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DaysAfterInitiation'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Predicate'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Operands'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Days'),
                                            new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Date'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Days'),
                                            new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DestinationBucketName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogFilePrefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDocument'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexDocumentSuffix'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RedirectAllRequestsTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoutingRules'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Hostname'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Redirect'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HttpErrorCodeReturnedEquals'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KeyPrefixEquals'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Hostname'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HttpRedirectCode'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ReplaceKeyPrefixWith'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ReplaceKeyWith'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Configurations'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Events'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S3KeyFilter'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FilterRules'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Suffix'),
                                                    ]),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IsMfaDeleteEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectLockEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRetention'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Days'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Years'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                                new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryption'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSKeyId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RotationRules'),
                                new \PHPStan\Type\Constant\ConstantStringType('RotationOccurredWithinFrequency'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RotationEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('RotationLambdaArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AutomaticallyAfterDays'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrincipalId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrincipalType'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrincipalName'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SessionContext'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SessionIssuer'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MfaAuthenticated'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrincipalId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttachedManagedPolicies'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('GroupList'),
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserPolicyList'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttachmentCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultVersionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('IsAttachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryUsageCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('PolicyVersionList'),
                                new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IsDefaultVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientCertificateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultRouteSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('StageName'),
                                new \PHPStan\Type\Constant\ConstantStringType('StageVariables'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessLogSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoDeploy'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastDeploymentStatusMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DetailedMetricsEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DataTraceEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingBurstLimit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingRateLimit'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DetailedMetricsEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DataTraceEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingBurstLimit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingRateLimit'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DestinationArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApiEndpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiKeySelectionExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteSelectionExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('CorsConfiguration'),
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
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AllowOrigins'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AllowCredentials'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxAge'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AllowMethods'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AllowHeaders'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeDefinitions'),
                                new \PHPStan\Type\Constant\ConstantStringType('BillingModeSummary'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                                new \PHPStan\Type\Constant\ConstantStringType('GlobalTableVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                                new \PHPStan\Type\Constant\ConstantStringType('LatestStreamArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('LatestStreamLabel'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalSecondaryIndexes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('Replicas'),
                                new \PHPStan\Type\Constant\ConstantStringType('RestoreSummary'),
                                new \PHPStan\Type\Constant\ConstantStringType('SseDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('StreamSpecification'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableSizeBytes'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtectionEnabled'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateToPayPerRequestDateTime'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Backfilling'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexSizeBytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughput'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Projection'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NonKeyAttributes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ProjectionType'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LastDecreaseDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LastIncreaseDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfDecreasesToday'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WriteCapacityUnits'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GlobalSecondaryIndexes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KmsMasterKeyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReplicaStatusDescription'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionedThroughputOverride'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadCapacityUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceBackupArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceTableArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RestoreDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RestoreInProgress'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('InaccessibleEncryptionDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SseType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KmsMasterKeyArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StreamEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StreamViewType'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClientCertificateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('StageName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('CacheClusterEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('CacheClusterSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('CacheClusterStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('MethodSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                                new \PHPStan\Type\Constant\ConstantStringType('DocumentationVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessLogSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('CanarySettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('TracingEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('WebAclArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricsEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DataTraceEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingBurstLimit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingRateLimit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CachingEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CacheTtlInSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CacheDataEncrypted'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RequireAuthorizationForCacheControl'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UnauthorizedCacheControlHeaderStrategy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HttpMethod'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourcePath'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DestinationArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PercentTraffic'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StageVariableOverrides'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UseStageCache'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                new \PHPStan\Type\Constant\ConstantStringType('BinaryMediaTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinimumCompressionSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiKeySource'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndpointConfiguration'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Types'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('HasCustomEventSelectors'),
                                new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('IncludeGlobalServiceEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('IsMultiRegionTrail'),
                                new \PHPStan\Type\Constant\ConstantStringType('IsOrganizationTrail'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogFileValidationEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicName'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrailArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Patch'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ComplianceSummary'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CompliantCriticalCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CompliantHighCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CompliantMediumCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonCompliantCriticalCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CompliantInformationalCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonCompliantInformationalCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CompliantUnspecifiedCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonCompliantLowCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonCompliantHighCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CompliantLowCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PatchBaselineId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OverallSeverity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonCompliantMediumCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NonCompliantUnspecifiedCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PatchGroup'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainValidationOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExtendedKeyUsages'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImportedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('InUseBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('IssuedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyUsages'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotAfter'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotBefore'),
                                new \PHPStan\Type\Constant\ConstantStringType('Options'),
                                new \PHPStan\Type\Constant\ConstantStringType('RenewalEligibility'),
                                new \PHPStan\Type\Constant\ConstantStringType('RenewalSummary'),
                                new \PHPStan\Type\Constant\ConstantStringType('Serial'),
                                new \PHPStan\Type\Constant\ConstantStringType('SignatureAlgorithm'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubjectAlternativeNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceRecord'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ValidationDomain'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ValidationEmails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ValidationMethod'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ValidationStatus'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CertificateTransparencyLoggingPreference'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DomainValidationOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RenewalStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RenewalStatusReason'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ResourceRecord'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ValidationDomain'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ValidationEmails'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ValidationMethod'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ValidationStatus'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                                new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                                new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                                new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                                new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                                new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                                new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('LoggingStatus'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PublicIpAddress'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LastFailureMessage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LastFailureTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulDeliveryTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LoggingEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                                new \PHPStan\Type\Constant\ConstantStringType('BackendServerDescriptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('CanonicalHostedZoneName'),
                                new \PHPStan\Type\Constant\ConstantStringType('CanonicalHostedZoneNameID'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                                new \PHPStan\Type\Constant\ConstantStringType('HealthCheck'),
                                new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                                new \PHPStan\Type\Constant\ConstantStringType('ListenerDescriptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerAttributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Scheme'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceSecurityGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('InstancePort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyNames'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HealthyThreshold'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThreshold'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Listener'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyNames'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('InstancePort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceProtocol'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SslCertificateId'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AccessLog'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionDraining'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionSettings'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CrossZoneLoadBalancing'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalAttributes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EmitInterval'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketPrefix'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('IdleTimeout'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppCookieStickinessPolicies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LbCookieStickinessPolicies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OtherPolicies'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CookieName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CookieExpirationPeriod'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAlias'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttachedManagedPolicies'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('GroupPolicyList'),
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                                new \PHPStan\Type\Constant\ConstantStringType('AttachedManagedPolicies'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileList'),
                                new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundary'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                                new \PHPStan\Type\Constant\ConstantStringType('RolePolicyList'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxSessionDuration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AssumeRolePolicyDocument'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RoleId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsBoundaryType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWSAccountId'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyManager'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                                new \PHPStan\Type\Constant\ConstantStringType('Origin'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyRotationStatus'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeSha256'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                                new \PHPStan\Type\Constant\ConstantStringType('Layers'),
                                new \PHPStan\Type\Constant\ConstantStringType('MasterArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('MemorySize'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Role'),
                                new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                                new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('TracingConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                new \PHPStan\Type\Constant\ConstantStringType('Architectures'),
                                new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3ObjectVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZipFile'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Variables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompatibleRuntimes'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                                new \PHPStan\Type\Constant\ConstantStringType('CACertificateIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('DBClusterIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('DBInstanceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('DBInstanceClass'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbInstancePort'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbiResourceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                                new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAMDatabaseAuthenticationEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceCreateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('TdeCredentialArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('MultiAz'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoringResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbInstanceStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                                new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbSecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbParameterGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbSubnetGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                                new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('LatestRestorableTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaSourceDBInstanceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBInstanceIdentifiers'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaDBClusterIdentifiers'),
                                new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                                new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                                new \PHPStan\Type\Constant\ConstantStringType('OptionGroupMemberships'),
                                new \PHPStan\Type\Constant\ConstantStringType('CharacterSetName'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecondaryAvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('StatusInfos'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainMemberships'),
                                new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                                new \PHPStan\Type\Constant\ConstantStringType('MonitoringInterval'),
                                new \PHPStan\Type\Constant\ConstantStringType('MonitoringRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                                new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                                new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsKmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PerformanceInsightsRetentionPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudWatchLogsExports'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProcessorFeatures'),
                                new \PHPStan\Type\Constant\ConstantStringType('ListenerEndpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxAllocatedStorage'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FeatureName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DbParameterGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DbSubnetGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DbSubnetGroupDescription'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DbSubnetGroupArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DbInstanceClass'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DbInstanceIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CaCertificateIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DbSubnetGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PendingCloudWatchLogsExports'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProcessorFeatures'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LogTypesToEnable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LogTypesToDisable'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OptionGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Normal'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Fqdn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KmsMasterKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Subscription'),
                                new \PHPStan\Type\Constant\ConstantStringType('TopicName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                                new \PHPStan\Type\Constant\ConstantStringType('SqsSuccessFeedbackRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SqsFailureFeedbackRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationSuccessFeedbackRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirehoseSuccessFeedbackRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirehoseFailureFeedbackRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('HttpSuccessFeedbackRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('HttpFailureFeedbackRoleArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
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
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KmsDataKeyReusePeriodSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsMasterKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueueName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeadLetterTargetArn'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                                new \PHPStan\Type\Constant\ConstantStringType('WebAclId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExcludedRules'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OverrideAction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DbSnapshotIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbInstanceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceCreateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                                new \PHPStan\Type\Constant\ConstantStringType('OptionGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceDbSnapshotIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('TdeCredentialArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamDatabaseAuthenticationEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProcessorFeatures'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbiResourceId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
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
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('LicenseModel'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                                new \PHPStan\Type\Constant\ConstantStringType('PercentProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbClusterIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbClusterSnapshotIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamDatabaseAuthenticationEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbClusterSnapshotAttributes'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                                new \PHPStan\Type\Constant\ConstantStringType('BackupRetentionPeriod'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReaderEndpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomEndpoints'),
                                new \PHPStan\Type\Constant\ConstantStringType('MultiAz'),
                                new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredBackupWindow'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadReplicaIdentifiers'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageEncrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbClusterResourceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('AssociatedRoles'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnabledCloudWatchLogsExports'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
                                new \PHPStan\Type\Constant\ConstantStringType('HttpEndpointEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActivityStreamStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('CopyTagsToSnapshot'),
                                new \PHPStan\Type\Constant\ConstantStringType('CrossAccountClone'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainMemberships'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbClusterParameterGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbSubnetGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbClusterOptionGroupMemberships'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbClusterIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbClusterMembers'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamDatabaseAuthenticationEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Fqdn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterOptionGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IsClusterWriter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PromotionTier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DbInstanceIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DbClusterParameterGroupStatus'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActiveServicesCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('CapacityProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultCapacityProviderStrategy'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('RegisteredContainerInstancesCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('RunningTasksCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ExecuteCommandConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LogConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchEncryptionEnabled'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3EncryptionEnabled'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Base'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CapacityProvider'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Image'),
                                new \PHPStan\Type\Constant\ConstantStringType('MountPoints'),
                                new \PHPStan\Type\Constant\ConstantStringType('Privileged'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceVolume'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContainerPath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ContainerDefinitions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Family'),
                                new \PHPStan\Type\Constant\ConstantStringType('InferenceAccelerators'),
                                new \PHPStan\Type\Constant\ConstantStringType('IpcMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('PidMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('PlacementConstraints'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProxyConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresCompatibilities'),
                                new \PHPStan\Type\Constant\ConstantStringType('TaskRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Volumes'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Command'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DependsOn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DisableNetworking'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DnsSearchDomains'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DnsServers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DockerLabels'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DockerSecurityOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EntryPoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentFiles'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Essential'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExtraHosts'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FirelensConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheck'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Hostname'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Image'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Interactive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Links'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LinuxParameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MemoryReservation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MountPoints'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PortMappings'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Privileged'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PseudoTerminal'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadonlyRootFilesystem'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryCredentials'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceRequirements'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Secrets'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StopTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SystemControls'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ulimits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('User'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VolumesFrom'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ContainerName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
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
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Hostname'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Retries'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StartPeriod'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Devices'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InitProcessEnabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxSwap'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SharedMemorySize'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Swappiness'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Tmpfs'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Add'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Drop'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ContainerPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HostPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ])),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ContainerPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MountOptions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Size'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LogDriver'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SecretOptions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ValueFrom'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ContainerPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadOnly'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SourceVolume'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ContainerPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HostPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CredentialsParameter'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ValueFrom'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HardLimit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SoftLimit'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadOnly'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SourceContainer'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeviceType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ContainerName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProxyConfigurationProperties'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DockerVolumeConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EfsVolumeConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Host'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Autoprovision'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Driver'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DriverOpts'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AuthorizationConfig'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FilesystemId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RootDirectory'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryption'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TransitEncryptionPort'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AccessPointId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SourcePath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ContainerRuntime'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImageName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeMounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('Privileged'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MountPath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CustSubscriptionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomerAwsId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesList'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventSubscriptionArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceIdsList'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionCreationTime'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CapacityProviderStrategy'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentController'),
                                new \PHPStan\Type\Constant\ConstantStringType('DesiredCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnableEcsManagedTags'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnableExecuteCommand'),
                                new \PHPStan\Type\Constant\ConstantStringType('HealthCheckGracePeriodSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchType'),
                                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancers'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('PlacementConstraints'),
                                new \PHPStan\Type\Constant\ConstantStringType('PlacementStrategies'),
                                new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('PropagateTags'),
                                new \PHPStan\Type\Constant\ConstantStringType('Role'),
                                new \PHPStan\Type\Constant\ConstantStringType('SchedulingStrategy'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceRegistries'),
                                new \PHPStan\Type\Constant\ConstantStringType('TaskDefinition'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Base'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CapacityProvider'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentCircuitBreaker'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaximumPercent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MinimumHealthyPercent'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Rollback'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ContainerName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContainerPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AwsVpcConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AssignPublicIp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Field'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
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
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ContainerName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContainerPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RegistryArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssociatePublicIpAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('BlockDeviceMappings'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClassicLinkVpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClassicLinkVpcSecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('EbsOptimized'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamInstanceProfile'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceMonitoring'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('KernelId'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchConfigurationName'),
                                new \PHPStan\Type\Constant\ConstantStringType('PlacementTenancy'),
                                new \PHPStan\Type\Constant\ConstantStringType('RamdiskId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpotPrice'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserData'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetadataOptions'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ebs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NoDevice'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VirtualName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DeleteOnTermination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HttpEndpoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HttpPutResponseHopLimit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HttpTokens'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpnConnectionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomerGatewayId'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomerGatewayConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpnGatewayId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Category'),
                                new \PHPStan\Type\Constant\ConstantStringType('VgwTelemetry'),
                                new \PHPStan\Type\Constant\ConstantStringType('Options'),
                                new \PHPStan\Type\Constant\ConstantStringType('Routes'),
                                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AcceptedRouteCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LastStatusChange'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OutsideIpAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StaticRoutesOnly'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TunnelOptions'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DpdTimeoutSeconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IkeVersions'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OutsideIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Phase1DhGroupNumbers'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Phase1EncryptionAlgorithms'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Phase1IntegrityAlgorithms'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Phase1LifetimeSeconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Phase2DhGroupNumbers'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Phase2EncryptionAlgorithms'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Phase2IntegrityAlgorithms'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Phase2LifetimeSeconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PreSharedKey'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RekeyFuzzPercentage'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RekeyMarginTimeSeconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ReplayWindowSize'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TunnelInsideCidr'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DestinationCidrBlock'),
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RegistryId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Architecture'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImageDigest'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImageTags'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImagePublishedAt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessPolicies'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainEndpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeToNodeEncryptionOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceSoftwareOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainEndpointOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainEndpoints'),
                                new \PHPStan\Type\Constant\ConstantStringType('AdvancedSecurityOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedUpdateDate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cancellable'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NewVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UpdateAvailable'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OptionalDeployment'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WarmType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneCount'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointCertificateArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EnforceHTTPS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CustomEndpoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLSSecurityPolicy'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IndexSlowLogs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SearchSlowLogs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AuditLogs'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InternalUserDatabaseEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MasterUserOptions'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AcceptanceRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                                new \PHPStan\Type\Constant\ConstantStringType('BaseEndpointDnsNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('ManagesVpcEndpoints'),
                                new \PHPStan\Type\Constant\ConstantStringType('GatewayLoadBalancerArns'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkLoadBalancerArns'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateDnsName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceState'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceType'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ServiceType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('RateKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('RateLimit'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                                new \PHPStan\Type\Constant\ConstantStringType('MatchPredicates'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Negated'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('RateKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('RateLimit'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                                new \PHPStan\Type\Constant\ConstantStringType('MatchPredicates'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Negated'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImageScanningConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('ImageTagMutability'),
                                new \PHPStan\Type\Constant\ConstantStringType('LifecyclePolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('RepositoryName'),
                                new \PHPStan\Type\Constant\ConstantStringType('RepositoryPolicyText'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ScanOnPush'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LifecyclePolicyText'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RegistryId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityData'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourcesVpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndpointPublicAccess'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClusterLogging'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Types'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatefulRuleGroupReferences'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessCustomActions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessDefaultActions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessFragmentDefaultActions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StatelessRuleGroupReferences'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ActionDefinition'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PublishMetricAction'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeleteProtection'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallId'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallName'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirewallPolicyChangeProtection'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetChangeProtection'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetMappings'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuleGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuleGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuleGroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuleGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RulesSource'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('IpSets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PortSets'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RulesSourceList'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RulesString'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StatefulRules'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StatelessRulesAndCustomActions'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GeneratedRulesType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TargetTypes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Header'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RuleOptions'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DestinationPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Source'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SourcePort'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Keyword'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                            ])),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomActions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('StatelessRules'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ActionDefinition'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('PublishMetricAction'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                                    ], [
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RuleDefinition'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('MatchAttributes'),
                                                ], [
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('DestinationPorts'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Protocols'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('SourcePorts'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('TcpFlags'),
                                                    ], [
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                                                        ], [
                                                            new \PHPStan\Type\IntegerType(),
                                                            new \PHPStan\Type\IntegerType(),
                                                        ])),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('AddressDefinition'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('FromPort'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('ToPort'),
                                                        ], [
                                                            new \PHPStan\Type\IntegerType(),
                                                            new \PHPStan\Type\IntegerType(),
                                                        ])),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('AddressDefinition'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('Flags'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('Masks'),
                                                        ], [
                                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                                        ])),
                                                    ]),
                                                ]),
                                            ])),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DbSecurityGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbSecurityGroupDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('DbSecurityGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('IpRanges'),
                                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupOwnerId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrIp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('StreamEncryption'),
                                new \PHPStan\Type\Constant\ConstantStringType('ShardCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodHours'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultRouteTablePropagation'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoAcceptSharedAttachments'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultRouteTableAssociation'),
                                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayCidrBlocks'),
                                new \PHPStan\Type\Constant\ConstantStringType('AssociationDefaultRouteTableId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PropagationDefaultRouteTableId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpnEcmpSupport'),
                                new \PHPStan\Type\Constant\ConstantStringType('DnsSupport'),
                                new \PHPStan\Type\Constant\ConstantStringType('MulticastSupport'),
                                new \PHPStan\Type\Constant\ConstantStringType('AmazonSideAsn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessPointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                                new \PHPStan\Type\Constant\ConstantStringType('FileSystemId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PosixUser'),
                                new \PHPStan\Type\Constant\ConstantStringType('RootDirectory'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Gid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SecondaryGids'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CreationInfo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OwnerGid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OwnerUid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('DisableRollback'),
                                new \PHPStan\Type\Constant\ConstantStringType('DriftInformation'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnableTerminationProtection'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotificationArns'),
                                new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                                new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                                new \PHPStan\Type\Constant\ConstantStringType('StackStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('StackStatusReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('TimeoutInMinutes'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StackDriftStatus'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OutputKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OutputValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ActionsEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('AlarmActions'),
                                new \PHPStan\Type\Constant\ConstantStringType('AlarmArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('AlarmConfigurationUpdatedTimestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('AlarmDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('AlarmName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatapointsToAlarm'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('EvaluateLowSampleCountPercentile'),
                                new \PHPStan\Type\Constant\ConstantStringType('EvaluationPeriods'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExtendedStatistic'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientDataActions'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                new \PHPStan\Type\Constant\ConstantStringType('OkActions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                                new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdMetricId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TreatMissingData'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccepterVpcInfo'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequesterVpcInfo'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcPeeringConnectionId'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlockSet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlockSet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeeringOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowDnsResolutionFromRemoteVpc'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowEgressFromLocalClassicLinkToRemoteVpc'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowEgressFromLocalVpcToRemoteClassicLink'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlockSet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlockSet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PeeringOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6CidrBlock'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowDnsResolutionFromRemoteVpc'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowEgressFromLocalClassicLinkToRemoteVpc'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowEgressFromLocalVpcToRemoteClassicLink'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuleGroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('PredicateList'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Negated'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('RulesList'),
                                new \PHPStan\Type\Constant\ConstantStringType('WebAclId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OverrideAction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('PredicateList'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DataId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Negated'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuleGroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('TaskDefinitionArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                new \PHPStan\Type\Constant\ConstantStringType('Volumes'),
                                new \PHPStan\Type\Constant\ConstantStringType('Containers'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Host'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SourcePath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Image'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MountPoints'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Privileged'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SourceVolume'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ContainerPath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Notifications'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessPolicy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BackupVaultEvents'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BackupPlan'),
                                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedBackupSettings'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanRule'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BackupOptions'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetBackupVault'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StartWindowMinutes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EnableContinuousBackup'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CompletionWindowMinutes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CopyActions'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DestinationBackupVaultArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BackupSizeInBytes'),
                                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('BackupVaultName'),
                                new \PHPStan\Type\Constant\ConstantStringType('CalculatedLifecycle'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('IsEncrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastRestoreTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('Lifecycle'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecoveryPointArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceBackupVaultArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeleteAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAt'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BackupPlanVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BackupRuleId'),
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
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterDays'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MoveToColdStorageAfterDays'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateData'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultVersionNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('LatestVersionNumber'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BlockDeviceMappingSet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationSpecification'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CpuOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CreditSpecification'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DisableApiStop'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DisableApiTermination'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EbsOptimized'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ElasticGpuSpecificationSet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ElasticInferenceAcceleratorSet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EnclaveOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HibernationOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IamInstanceProfile'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceInitiatedShutdownBehavior'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceMarketOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceRequirements'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KernelId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LicenseSet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetadataOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Monitoring'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceSet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Placement'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PrivateDnsNameOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RamDiskId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIdSet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupSet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserData'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ebs'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NoDevice'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VirtualName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DeleteOnTermination'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationPreference'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationTarget'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationResourceGroupArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CoreCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ThreadsPerCore'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CpuCredits'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Configured'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MarketType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SpotOptions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('BlockDurationMinutes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('InstanceInterruptionBehavior'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MaxPrice'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SpotInstanceType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ValidUntil'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AcceleratorCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AcceleratorManufacturers'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AcceleratorNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AcceleratorTotalMemoryMiB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AcceleratorTypes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BareMetal'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BaselineEbsBandwidthMbps'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BurstablePerformance'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CpuManufacturers'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExcludedInstanceTypes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceGenerations'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LocalStorage'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LocalStorageTypes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MemoryGiBPerVCpu'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MemoryMiB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandMaxPricePercentageOverLowestPrice'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RequireHibernateSupport'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SpotMaxPricePercentageOverLowestPrice'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TotalLocalStorageGB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VCpuCount'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AutoRecovery'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HttpEndpoint'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HttpProtocolIpv6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HttpTokens'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HttpPutResponseHopLimit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceMetadataTags'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AssociateCarrierIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AssociatePublicIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DeleteOnTermination'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DeviceIndex'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InterfaceType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv4PrefixCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv4Prefixes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6AddressCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Addresses'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6PrefixCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Prefixes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkCardIndex'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddresses'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SecondaryPrivateIpAddressCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Ipv4Prefix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6Prefix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Affinity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HostId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HostResourceGroupArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PartitionNumber'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SpreadDomain'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Tenancy'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EnableResourceNameDnsAAAARecord'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EnableResourceNameDnsARecord'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HostnameType'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AcceleratorTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('AdditionalCodeRepositories'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultCodeRepository'),
                                new \PHPStan\Type\Constant\ConstantStringType('DirectInternetAccess'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceMetadataServiceConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotebookInstanceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotebookInstanceLifecycleConfigName'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotebookInstanceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotebookInstanceStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('PlatformIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RootAccess'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeSizeInGB'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MinimumInstanceMetadataServiceVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
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
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ManagedbyFirewallManager'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                                new \PHPStan\Type\Constant\ConstantStringType('CaptchaConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                                new \PHPStan\Type\Constant\ConstantStringType('VisibilityConfig'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ImmunityTimeProperty'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ImmunityTime'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Allow'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Block'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CustomRequestHandling'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('InsertHeaders'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CustomResponse'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomResponseBodyKey'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeaders'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OverrideAction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VisibilityConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Allow'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Captcha'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomRequestHandling'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('InsertHeaders'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomResponse'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('CustomResponseBodyKey'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeaders'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomRequestHandling'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('InsertHeaders'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomRequestHandling'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('InsertHeaders'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchMetricsEnabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SampledRequestsEnabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchMetricsEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SampledRequestsEnabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                                new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                                new \PHPStan\Type\Constant\ConstantStringType('VisibilityConfig'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OverrideAction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VisibilityConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Allow'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Captcha'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomRequestHandling'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('InsertHeaders'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomResponse'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('CustomResponseBodyKey'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeaders'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomRequestHandling'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('InsertHeaders'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CustomRequestHandling'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('InsertHeaders'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchMetricsEnabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SampledRequestsEnabled'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchMetricsEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SampledRequestsEnabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssociationSet'),
                                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PropagatingVgwSet'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteSet'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AssociationState'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Main'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RouteTableAssociationId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RouteTableId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CarrierGatewayId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DestinationCidrBlock'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DestinationIpv6CidrBlock'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DestinationPrefixListId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EgressOnlyInternetGatewayId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GatewayId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceOwnerId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LocalGatewayId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NatGatewayId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcPeeringConnectionId'),
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
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationStrategy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                                new \PHPStan\Type\Constant\ConstantStringType('BrokerArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('BrokerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeploymentMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineType'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('HostInstanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('LdapServerMetadata'),
                                new \PHPStan\Type\Constant\ConstantStringType('Logs'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaintenanceWindowStartTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UseAwsOwnedKey'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Hosts'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleBase'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleSearchMatching'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleSearchSubtree'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountUsername'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserBase'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserRoleName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserSearchMatching'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserSearchSubtree'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Audit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('General'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AuditLogGroup'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GeneralLogGroup'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Audit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('General'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DayOfWeek'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TimeOfDay'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PendingChange'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('OpenIdConnectConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaAuthorizerConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('XrayEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserPoolConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('AdditionalAuthenticationProviders'),
                                new \PHPStan\Type\Constant\ConstantStringType('WafWebAclArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AuthTtL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IatTtL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizerResultTtlInSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizerUri'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IdentityValidationExpression'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AppIdClientRegex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DefaultAction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExcludeVerboseContent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FieldLogLevel'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaAuthorizerConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OpenIdConnectConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolConfig'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AuthorizerResultTtlInSeconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AuthorizerUri'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IdentityValidationExpression'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AuthTtL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IatTtL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AppIdClientRegex'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DefaultAction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('RegistryArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RegistryName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSources'),
                                new \PHPStan\Type\Constant\ConstantStringType('Features'),
                                new \PHPStan\Type\Constant\ConstantStringType('FindingPublishingFrequency'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CloudTrail'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DnsLogs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FlowLogs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Kubernetes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MalwareProtection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3Logs'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AuditLogs'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ScanEc2InstanceWithFindings'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EbsVolumes'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('StateMachineArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('TracingConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeExecutionData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Level'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroup'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LogGroupArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ResultConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndpointArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndpointIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExternalId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExtraConnectionAttributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('SslMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Username'),
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
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndpointUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventBuses'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReplicationConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoutingConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EventBusArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FailoverConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Secondary'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HealthCheck'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Route'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CdcStartPosition'),
                                new \PHPStan\Type\Constant\ConstantStringType('CdcStartTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('CdcStopPosition'),
                                new \PHPStan\Type\Constant\ConstantStringType('MigrationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReplicationInstanceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReplicationTaskIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReplicationTaskSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceEndpointArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableMappings'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetEndpointArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('TaskData'),
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
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AllocatedStorage'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                                new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReplicationInstanceClass'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReplicationInstanceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReplicationSubnetGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ReplicationSubnetGroupIdentifier'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('HostedZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('Vpcs'),
                                new \PHPStan\Type\Constant\ConstantStringType('NameServers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryLoggingConfig'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Config'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterInfo'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionInfo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfBrokerNodes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientAuthentication'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionInTransit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('InCluster'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ClientBroker'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DataVolumeKMSKeyId'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sasl'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unauthenticated'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Tls'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Iam'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Scram'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            ], [
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArnList'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessPointArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketAccountId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkOrigin'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicAccessBlockConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClientVpnEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClientCidrBlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('DnsServer'),
                                new \PHPStan\Type\Constant\ConstantStringType('SplitTunnel'),
                                new \PHPStan\Type\Constant\ConstantStringType('TransportProtocol'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpnPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServerCertificateArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionLogOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIdSet'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelfServicePortalUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClientConnectOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('SessionTimeoutHours'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClientLoginBannerOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectory'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MutualAuthentication'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FederatedAuthentication'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ClientRootCertificateChain'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SamlProviderArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SelfServiceSamlProviderArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CloudwatchLogGroup'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CloudwatchLogStream'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BannerText'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReasons'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedStandards'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityControlParameters'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReasonCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StandardsId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE_POSITIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE_POSITIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BENIGN_POSITIVE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSIGNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEFERRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOTIFIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPPRESSED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProductArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('VulnerablePackages'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cvss'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedVulnerabilities'),
                        new \PHPStan\Type\Constant\ConstantStringType('Vendor'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReferenceUrls'),
                        new \PHPStan\Type\Constant\ConstantStringType('FixAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('EpssScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExploitAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastKnownExploitAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeVulnerabilities'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('Epoch'),
                            new \PHPStan\Type\Constant\ConstantStringType('Release'),
                            new \PHPStan\Type\Constant\ConstantStringType('Architecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('PackageManager'),
                            new \PHPStan\Type\Constant\ConstantStringType('FilePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('FixedInVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Remediation'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceLayerHash'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceLayerArn'),
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
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('BaseScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('BaseVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                            new \PHPStan\Type\Constant\ConstantStringType('Adjustments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            new \PHPStan\Type\Constant\ConstantStringType('VendorSeverity'),
                            new \PHPStan\Type\Constant\ConstantStringType('VendorCreatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('VendorUpdatedAt'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('YES'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('YES'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cwes'),
                            new \PHPStan\Type\Constant\ConstantStringType('FilePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EndLine'),
                                new \PHPStan\Type\Constant\ConstantStringType('FileName'),
                                new \PHPStan\Type\Constant\ConstantStringType('FilePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartLine'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstalledCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailedCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstalledOtherCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstalledRejectedCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstalledPendingReboot'),
                        new \PHPStan\Type\Constant\ConstantStringType('OperationStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('OperationEndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RebootOption'),
                        new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkConnectionAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsApiCallAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('DnsRequestAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('PortProbeAction'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectionDirection'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteIpDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemotePortDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalPortDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Blocked'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IpAddressV4'),
                                new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                new \PHPStan\Type\Constant\ConstantStringType('City'),
                                new \PHPStan\Type\Constant\ConstantStringType('GeoLocation'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AsnOrg'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Isp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Org'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CountryName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CityName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Lon'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Lat'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('PortName'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('PortName'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Api'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('CallerType'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteIpDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('DomainDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('AffectedResources'),
                            new \PHPStan\Type\Constant\ConstantStringType('FirstSeen'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSeen'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IpAddressV4'),
                                new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                new \PHPStan\Type\Constant\ConstantStringType('City'),
                                new \PHPStan\Type\Constant\ConstantStringType('GeoLocation'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AsnOrg'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Isp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Org'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CountryName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CityName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Lon'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Lat'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Blocked'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PortProbeDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('Blocked'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LocalPortDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalIpDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('RemoteIpDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PortName'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressV4'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressV4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GeoLocation'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AsnOrg'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Isp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Org'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CountryName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CityName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Lon'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lat'),
                                    ], [
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Criticality'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Types'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ProductArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Original'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Sequence'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                            new \PHPStan\Type\Constant\ConstantStringType('Actors'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                            new \PHPStan\Type\Constant\ConstantStringType('Signals'),
                            new \PHPStan\Type\Constant\ConstantStringType('SequenceIndicators'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('User'),
                                new \PHPStan\Type\Constant\ConstantStringType('Session'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CredentialUid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Account'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MfaStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ip'),
                                new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutonomousSystem'),
                                new \PHPStan\Type\Constant\ConstantStringType('Connection'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Lat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Lon'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INBOUND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OUTBOUND'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Title'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProductArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('SignalIndicators'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirstSeenAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastSeenAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActorIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndpointIds'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                new \PHPStan\Type\Constant\ConstantStringType('Title'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getInsightResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InsightResults'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InsightArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupByAttribute'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultValues'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GroupByAttributeValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Insights'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InsightArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupByAttribute'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProductArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('GeneratorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('FirstObservedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastObservedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('SeverityProduct'),
                        new \PHPStan\Type\Constant\ConstantStringType('SeverityNormalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('SeverityLabel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Criticality'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecommendationText'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductFields'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompanyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserDefinedFields'),
                        new \PHPStan\Type\Constant\ConstantStringType('MalwareName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MalwareType'),
                        new \PHPStan\Type\Constant\ConstantStringType('MalwarePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('MalwareState'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkDirection'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkProtocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkSourceIpV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkSourceIpV6'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkSourcePort'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkSourceDomain'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkSourceMac'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkDestinationIpV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkDestinationIpV6'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkDestinationPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkDestinationDomain'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessPid'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessParentPid'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessLaunchedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessTerminatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThreatIntelIndicatorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThreatIntelIndicatorValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThreatIntelIndicatorCategory'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThreatIntelIndicatorLastObservedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThreatIntelIndicatorSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThreatIntelIndicatorSourceUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourcePartition'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsEc2InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsEc2InstanceImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsEc2InstanceIpV4Addresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsEc2InstanceIpV6Addresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsEc2InstanceKeyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsEc2InstanceIamInstanceProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsEc2InstanceVpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsEc2InstanceSubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsEc2InstanceLaunchedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsS3BucketOwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsS3BucketOwnerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsIamAccessKeyUserName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsIamAccessKeyPrincipalName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsIamAccessKeyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsIamAccessKeyCreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceAwsIamUserUserName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceContainerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceContainerImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceContainerImageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceContainerLaunchedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceDetailsOther'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerificationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkflowState'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkflowStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecordState'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedFindingsProductArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedFindingsId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoteText'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoteUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoteUpdatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Keyword'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingProviderFieldsConfidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingProviderFieldsCriticality'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingProviderFieldsRelatedFindingsId'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingProviderFieldsRelatedFindingsProductArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingProviderFieldsSeverityLabel'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingProviderFieldsSeverityOriginal'),
                        new \PHPStan\Type\Constant\ConstantStringType('FindingProviderFieldsTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sample'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceSecurityControlId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceAssociatedStandardsId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VulnerabilitiesExploitAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('VulnerabilitiesFixAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceSecurityControlParametersName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceSecurityControlParametersValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsAccountName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceApplicationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceApplicationArn'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('DateRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Gte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lte'),
                            new \PHPStan\Type\Constant\ConstantStringType('Eq'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lt'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comparison'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX_NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getInvitationsCount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvitationsCount'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getMasterAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Master'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Email'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdministratorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessingResult'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getSecurityControlDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityControlDefinition'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('RemediationUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SeverityRating'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentRegionAvailability'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomizableProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterDefinitions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('Parameters')),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Integer'),
                            new \PHPStan\Type\Constant\ConstantStringType('IntegerList'),
                            new \PHPStan\Type\Constant\ConstantStringType('Double'),
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                            new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                            new \PHPStan\Type\Constant\ConstantStringType('Enum'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnumList'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Re2Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpressionDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Re2Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpressionDescription'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function inviteMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessingResult'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listAutomationRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutomationRulesMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleOrder'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTerminal'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConfigurationPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationPolicySummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConfigurationPolicyAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationPolicyAssociationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationPolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONAL_UNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROOT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INHERITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLIED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEnabledProductsForImport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProductSubscriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFindingAggregators(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FindingAggregators'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FindingAggregatorArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInvitations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Invitations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Email'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdministratorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemberStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvitedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOrganizationAdminAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdminAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSecurityControlDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityControlDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('RemediationUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SeverityRating'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentRegionAvailability'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomizableProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterDefinitions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('Parameters')),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Integer'),
                            new \PHPStan\Type\Constant\ConstantStringType('IntegerList'),
                            new \PHPStan\Type\Constant\ConstantStringType('Double'),
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                            new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                            new \PHPStan\Type\Constant\ConstantStringType('Enum'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnumList'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Re2Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpressionDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Re2Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpressionDescription'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStandardsControlAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StandardsControlAssociationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityControlArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelatedRequirements'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsControlTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('StandardsControlDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function startConfigurationPolicyAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationPolicyId'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetId'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                new \PHPStan\Type\Constant\ConstantStringType('AssociationType'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AssociationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('AssociationStatusMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONAL_UNIT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROOT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INHERITED'),
                    new \PHPStan\Type\Constant\ConstantStringType('APPLIED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startConfigurationPolicyDisassociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
    private function updateActionTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateConfigurationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationPolicy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityHub'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnabledStandardIdentifiers'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityControlsConfiguration'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EnabledSecurityControlIdentifiers'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisabledSecurityControlIdentifiers'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityControlCustomParameters'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityControlId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Integer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IntegerList'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Double'),
                                        new \PHPStan\Type\Constant\ConstantStringType('String'),
                                        new \PHPStan\Type\Constant\ConstantStringType('StringList'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Boolean'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Enum'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EnumList'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ])),
                            ])),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateFindingAggregator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FindingAggregatorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FindingAggregationRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('RegionLinkingMode'),
                new \PHPStan\Type\Constant\ConstantStringType('Regions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateInsight(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateSecurityControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateSecurityHubConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateStandardsControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}