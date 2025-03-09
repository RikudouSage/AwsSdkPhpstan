<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class Inspector2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Inspector2\Inspector2Client>
     */
    public function getClass(): string
    {
        return \Aws\Inspector2\Inspector2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateMember',
            'batchGetAccountStatus',
            'batchGetCodeSnippet',
            'batchGetFindingDetails',
            'batchGetFreeTrialInfo',
            'batchGetMemberEc2DeepInspectionStatus',
            'batchUpdateMemberEc2DeepInspectionStatus',
            'cancelFindingsReport',
            'cancelSbomExport',
            'createCisScanConfiguration',
            'createFilter',
            'createFindingsReport',
            'createSbomExport',
            'deleteCisScanConfiguration',
            'deleteFilter',
            'describeOrganizationConfiguration',
            'disable',
            'disableDelegatedAdminAccount',
            'disassociateMember',
            'enable',
            'enableDelegatedAdminAccount',
            'getCisScanReport',
            'getCisScanResultDetails',
            'getConfiguration',
            'getDelegatedAdminAccount',
            'getEc2DeepInspectionConfiguration',
            'getEncryptionKey',
            'getFindingsReportStatus',
            'getMember',
            'getSbomExport',
            'listAccountPermissions',
            'listCisScanConfigurations',
            'listCisScanResultsAggregatedByChecks',
            'listCisScanResultsAggregatedByTargetResource',
            'listCisScans',
            'listCoverage',
            'listCoverageStatistics',
            'listDelegatedAdminAccounts',
            'listFilters',
            'listFindingAggregations',
            'listFindings',
            'listMembers',
            'listTagsForResource',
            'listUsageTotals',
            'resetEncryptionKey',
            'searchVulnerabilities',
            'sendCisSessionHealth',
            'sendCisSessionTelemetry',
            'startCisSession',
            'stopCisSession',
            'tagResource',
            'untagResource',
            'updateCisScanConfiguration',
            'updateConfiguration',
            'updateEc2DeepInspectionConfiguration',
            'updateEncryptionKey',
            'updateFilter',
            'updateOrgEc2DeepInspectionConfiguration',
            'updateOrganizationConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateMember' => $this->associateMember(),
            'batchGetAccountStatus' => $this->batchGetAccountStatus(),
            'batchGetCodeSnippet' => $this->batchGetCodeSnippet(),
            'batchGetFindingDetails' => $this->batchGetFindingDetails(),
            'batchGetFreeTrialInfo' => $this->batchGetFreeTrialInfo(),
            'batchGetMemberEc2DeepInspectionStatus' => $this->batchGetMemberEc2DeepInspectionStatus(),
            'batchUpdateMemberEc2DeepInspectionStatus' => $this->batchUpdateMemberEc2DeepInspectionStatus(),
            'cancelFindingsReport' => $this->cancelFindingsReport(),
            'cancelSbomExport' => $this->cancelSbomExport(),
            'createCisScanConfiguration' => $this->createCisScanConfiguration(),
            'createFilter' => $this->createFilter(),
            'createFindingsReport' => $this->createFindingsReport(),
            'createSbomExport' => $this->createSbomExport(),
            'deleteCisScanConfiguration' => $this->deleteCisScanConfiguration(),
            'deleteFilter' => $this->deleteFilter(),
            'describeOrganizationConfiguration' => $this->describeOrganizationConfiguration(),
            'disable' => $this->disable(),
            'disableDelegatedAdminAccount' => $this->disableDelegatedAdminAccount(),
            'disassociateMember' => $this->disassociateMember(),
            'enable' => $this->enable(),
            'enableDelegatedAdminAccount' => $this->enableDelegatedAdminAccount(),
            'getCisScanReport' => $this->getCisScanReport(),
            'getCisScanResultDetails' => $this->getCisScanResultDetails(),
            'getConfiguration' => $this->getConfiguration(),
            'getDelegatedAdminAccount' => $this->getDelegatedAdminAccount(),
            'getEc2DeepInspectionConfiguration' => $this->getEc2DeepInspectionConfiguration(),
            'getEncryptionKey' => $this->getEncryptionKey(),
            'getFindingsReportStatus' => $this->getFindingsReportStatus(),
            'getMember' => $this->getMember(),
            'getSbomExport' => $this->getSbomExport(),
            'listAccountPermissions' => $this->listAccountPermissions(),
            'listCisScanConfigurations' => $this->listCisScanConfigurations(),
            'listCisScanResultsAggregatedByChecks' => $this->listCisScanResultsAggregatedByChecks(),
            'listCisScanResultsAggregatedByTargetResource' => $this->listCisScanResultsAggregatedByTargetResource(),
            'listCisScans' => $this->listCisScans(),
            'listCoverage' => $this->listCoverage(),
            'listCoverageStatistics' => $this->listCoverageStatistics(),
            'listDelegatedAdminAccounts' => $this->listDelegatedAdminAccounts(),
            'listFilters' => $this->listFilters(),
            'listFindingAggregations' => $this->listFindingAggregations(),
            'listFindings' => $this->listFindings(),
            'listMembers' => $this->listMembers(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listUsageTotals' => $this->listUsageTotals(),
            'resetEncryptionKey' => $this->resetEncryptionKey(),
            'searchVulnerabilities' => $this->searchVulnerabilities(),
            'sendCisSessionHealth' => $this->sendCisSessionHealth(),
            'sendCisSessionTelemetry' => $this->sendCisSessionTelemetry(),
            'startCisSession' => $this->startCisSession(),
            'stopCisSession' => $this->stopCisSession(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCisScanConfiguration' => $this->updateCisScanConfiguration(),
            'updateConfiguration' => $this->updateConfiguration(),
            'updateEc2DeepInspectionConfiguration' => $this->updateEc2DeepInspectionConfiguration(),
            'updateEncryptionKey' => $this->updateEncryptionKey(),
            'updateFilter' => $this->updateFilter(),
            'updateOrgEc2DeepInspectionConfiguration' => $this->updateOrgEc2DeepInspectionConfiguration(),
            'updateOrganizationConfiguration' => $this->updateOrganizationConfiguration(),
        };
    }
    private function associateMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchGetAccountStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accounts'),
                new \PHPStan\Type\Constant\ConstantStringType('failedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecr'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaCode'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALREADY_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPEND_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSM_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSM_THROTTLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_THROTTLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SCAN_NOT_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATE_ALL_MEMBERS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_IS_ISOLATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_RESOURCE_DATA_SYNC_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_ASSOCIATION_VERSION_LIMIT_EXCEEDED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALREADY_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPEND_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSM_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSM_THROTTLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_THROTTLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SCAN_NOT_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATE_ALL_MEMBERS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_IS_ISOLATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_RESOURCE_DATA_SYNC_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_ASSOCIATION_VERSION_LIMIT_EXCEEDED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALREADY_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPEND_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSM_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSM_THROTTLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_THROTTLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SCAN_NOT_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATE_ALL_MEMBERS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_IS_ISOLATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_RESOURCE_DATA_SYNC_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_ASSOCIATION_VERSION_LIMIT_EXCEEDED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALREADY_ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPEND_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSM_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSM_THROTTLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_THROTTLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SCAN_NOT_DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATE_ALL_MEMBERS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_IS_ISOLATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_RESOURCE_DATA_SYNC_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_ASSOCIATION_VERSION_LIMIT_EXCEEDED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALREADY_ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPEND_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSM_UNAVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSM_THROTTLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_UNAVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_THROTTLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SCAN_NOT_DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATE_ALL_MEMBERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_IS_ISOLATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_RESOURCE_DATA_SYNC_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_ASSOCIATION_VERSION_LIMIT_EXCEEDED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALREADY_ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPEND_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_UNAVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_THROTTLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_UNAVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_THROTTLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SCAN_NOT_DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATE_ALL_MEMBERS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_IS_ISOLATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_RESOURCE_DATA_SYNC_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_ASSOCIATION_VERSION_LIMIT_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecr'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchGetCodeSnippet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('codeSnippetResults'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('codeSnippet'),
                    new \PHPStan\Type\Constant\ConstantStringType('endLine'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startLine'),
                    new \PHPStan\Type\Constant\ConstantStringType('suggestedFixes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('lineNumber'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingArn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CODE_SNIPPET_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_INPUT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetFindingDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
                new \PHPStan\Type\Constant\ConstantStringType('findingDetails'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingArn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FINDING_DETAILS_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_INPUT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cisaData'),
                    new \PHPStan\Type\Constant\ConstantStringType('cwes'),
                    new \PHPStan\Type\Constant\ConstantStringType('epssScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('evidences'),
                    new \PHPStan\Type\Constant\ConstantStringType('exploitObserved'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('referenceUrls'),
                    new \PHPStan\Type\Constant\ConstantStringType('riskScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('tools'),
                    new \PHPStan\Type\Constant\ConstantStringType('ttps'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('dateAdded'),
                        new \PHPStan\Type\Constant\ConstantStringType('dateDue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('evidenceRule'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('firstSeen'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSeen'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function batchGetFreeTrialInfo(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accounts'),
                new \PHPStan\Type\Constant\ConstantStringType('failedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('end'),
                        new \PHPStan\Type\Constant\ConstantStringType('start'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_CODE'),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetMemberEc2DeepInspectionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountIds'),
                new \PHPStan\Type\Constant\ConstantStringType('failedAccountIds'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2ScanStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchUpdateMemberEc2DeepInspectionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountIds'),
                new \PHPStan\Type\Constant\ConstantStringType('failedAccountIds'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2ScanStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function cancelFindingsReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelSbomExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCisScanConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scanConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFindingsReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSbomExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteCisScanConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scanConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('autoEnable'),
                new \PHPStan\Type\Constant\ConstantStringType('maxAccountLimitReached'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecr'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaCode'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function disable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accounts'),
                new \PHPStan\Type\Constant\ConstantStringType('failedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecr'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALREADY_ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPEND_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_UNAVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_THROTTLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_UNAVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_THROTTLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SCAN_NOT_DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATE_ALL_MEMBERS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_IS_ISOLATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_RESOURCE_DATA_SYNC_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_ASSOCIATION_VERSION_LIMIT_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecr'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function disableDelegatedAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('delegatedAdminAccountId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function enable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accounts'),
                new \PHPStan\Type\Constant\ConstantStringType('failedAccounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecr'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALREADY_ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPEND_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_UNAVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_THROTTLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_UNAVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENTBRIDGE_THROTTLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SCAN_NOT_DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATE_ALL_MEMBERS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_IS_ISOLATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_RESOURCE_DATA_SYNC_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_ASSOCIATION_VERSION_LIMIT_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecr'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function enableDelegatedAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('delegatedAdminAccountId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCisScanReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('url'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCisScanResultDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('scanResultDetails'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('checkDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('checkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('level'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('remediation'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LEVEL_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEVEL_2'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ec2Configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('ecrConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('scanModeState'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scanMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('scanModeStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_AGENT_BASED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_HYBRID'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('rescanDurationState'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pullDateRescanDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('rescanDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_14'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_30'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_60'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_90'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_180'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LIFETIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_30'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_180'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_14'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_60'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_90'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDelegatedAdminAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('delegatedAdmin'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationshipStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESIGNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_VERIFICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_VERIFICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANNOT_CREATE_DETECTOR_IN_ORG_MASTER'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getEc2DeepInspectionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('orgPackagePaths'),
                new \PHPStan\Type\Constant\ConstantStringType('packagePaths'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function getEncryptionKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFindingsReportStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('filterCriteria'),
                new \PHPStan\Type\Constant\ConstantStringType('reportId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_PERMISSIONS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NO_FINDINGS_FOUND'),
                    new \PHPStan\Type\Constant\ConstantStringType('BUCKET_NOT_FOUND'),
                    new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_BUCKET_REGION'),
                    new \PHPStan\Type\Constant\ConstantStringType('MALFORMED_KMS_KEY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeVulnerabilityDetectorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeVulnerabilityDetectorTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeVulnerabilityFilePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceImageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceSubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceVpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecrImageArchitecture'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecrImageHash'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecrImagePushedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecrImageRegistry'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecrImageRepositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecrImageTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('epssScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('exploitAvailable'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstObservedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('fixAvailable'),
                    new \PHPStan\Type\Constant\ConstantStringType('inspectorScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionLastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionLayers'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionRuntime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastObservedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('portRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('relatedVulnerabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('vendorSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('vulnerabilityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('vulnerabilitySource'),
                    new \PHPStan\Type\Constant\ConstantStringType('vulnerablePackages'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                        new \PHPStan\Type\Constant\ConstantStringType('startInclusive'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lowerInclusive'),
                        new \PHPStan\Type\Constant\ConstantStringType('upperInclusive'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                        new \PHPStan\Type\Constant\ConstantStringType('startInclusive'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lowerInclusive'),
                        new \PHPStan\Type\Constant\ConstantStringType('upperInclusive'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                        new \PHPStan\Type\Constant\ConstantStringType('startInclusive'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                        new \PHPStan\Type\Constant\ConstantStringType('startInclusive'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('beginInclusive'),
                        new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                        new \PHPStan\Type\Constant\ConstantStringType('startInclusive'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('epoch'),
                        new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('release'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceLambdaLayerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceLayerHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lowerInclusive'),
                            new \PHPStan\Type\Constant\ConstantStringType('upperInclusive'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function getMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('member'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('delegatedAdminAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationshipStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESIGNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_VERIFICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_VERIFICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANNOT_CREATE_DETECTOR_IN_ORG_MASTER'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getSbomExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('filterCriteria'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('reportId'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_PERMISSIONS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NO_FINDINGS_FOUND'),
                    new \PHPStan\Type\Constant\ConstantStringType('BUCKET_NOT_FOUND'),
                    new \PHPStan\Type\Constant\ConstantStringType('INCOMPATIBLE_BUCKET_REGION'),
                    new \PHPStan\Type\Constant\ConstantStringType('MALFORMED_KMS_KEY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecrImageTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecrRepositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CYCLONEDX_1_4'),
                    new \PHPStan\Type\Constant\ConstantStringType('SPDX_2_3'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function listAccountPermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('service'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_SCANNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLE_SCANNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLE_REPOSITORY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLE_REPOSITORY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listCisScanConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('scanConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('daily'),
                        new \PHPStan\Type\Constant\ConstantStringType('monthly'),
                        new \PHPStan\Type\Constant\ConstantStringType('oneTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('weekly'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('timeOfDay'),
                                new \PHPStan\Type\Constant\ConstantStringType('timezone'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('day'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUN'),
                                new \PHPStan\Type\Constant\ConstantStringType('MON'),
                                new \PHPStan\Type\Constant\ConstantStringType('TUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('WED'),
                                new \PHPStan\Type\Constant\ConstantStringType('THU'),
                                new \PHPStan\Type\Constant\ConstantStringType('FRI'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('timeOfDay'),
                                new \PHPStan\Type\Constant\ConstantStringType('timezone'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('days'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUN'),
                                new \PHPStan\Type\Constant\ConstantStringType('MON'),
                                new \PHPStan\Type\Constant\ConstantStringType('TUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('WED'),
                                new \PHPStan\Type\Constant\ConstantStringType('THU'),
                                new \PHPStan\Type\Constant\ConstantStringType('FRI'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAT'),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('timeOfDay'),
                                new \PHPStan\Type\Constant\ConstantStringType('timezone'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LEVEL_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEVEL_2'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetResourceTags'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listCisScanResultsAggregatedByChecks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('checkAggregations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('checkDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('checkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('level'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LEVEL_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEVEL_2'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCisScanResultsAggregatedByTargetResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('targetResourceAggregations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetResourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetStatusReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('passed'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SCAN_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_OS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_UNMANAGED'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listCisScans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('scans'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('failedChecks'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalChecks'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LEVEL_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEVEL_2'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetResourceTags'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function listCoverage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('coveredResources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastScannedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrImage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunction'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amiId'),
                            new \PHPStan\Type\Constant\ConstantStringType('platform'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('MACOS'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('imagePulledAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('scanFrequency'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCAN_ON_PUSH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS_SCAN'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('functionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('functionTags'),
                            new \PHPStan\Type\Constant\ConstantStringType('layers'),
                            new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NODEJS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NODEJS_12_X'),
                                new \PHPStan\Type\Constant\ConstantStringType('NODEJS_14_X'),
                                new \PHPStan\Type\Constant\ConstantStringType('NODEJS_16_X'),
                                new \PHPStan\Type\Constant\ConstantStringType('JAVA_8'),
                                new \PHPStan\Type\Constant\ConstantStringType('JAVA_8_AL2'),
                                new \PHPStan\Type\Constant\ConstantStringType('JAVA_11'),
                                new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3_7'),
                                new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3_8'),
                                new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3_9'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('NODEJS_18_X'),
                                new \PHPStan\Type\Constant\ConstantStringType('GO_1_X'),
                                new \PHPStan\Type\Constant\ConstantStringType('JAVA_17'),
                                new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3_10'),
                                new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3_11'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOTNETCORE_3_1'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOTNET_6'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOTNET_7'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUBY_2_7'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUBY_3_2'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_EC2_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_ECR_CONTAINER_IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_ECR_REPOSITORY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA_FUNCTION'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_SSM_AGENT_BASED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_AGENTLESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_INITIAL_SCAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNMANAGED_EC2_INSTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_OS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCAN_ELIGIBILITY_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_TERMINATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_RESOURCES_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_SIZE_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCAN_FREQUENCY_MANUAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCAN_FREQUENCY_SCAN_ON_PUSH'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DISABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_INVENTORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STALE_INVENTORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUDED_BY_TAG'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_RUNTIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_MEDIA_TYPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_CONFIG_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_INSPECTION_PACKAGE_COLLECTION_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_INSPECTION_DAILY_SSM_INVENTORY_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_INSPECTION_COLLECTION_TIME_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_INSPECTION_NO_INVENTORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AGENTLESS_INSTANCE_STORAGE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AGENTLESS_INSTANCE_COLLECTION_TIME_LIMIT_EXCEEDED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('PACKAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CODE'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCoverageStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('countsByGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('totalCounts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupKey'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SCAN_STATUS_CODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCAN_STATUS_REASON'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_TYPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECR_REPOSITORY_NAME'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listDelegatedAdminAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('delegatedAdminAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
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
    private function listFilters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('filters'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('criteria'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPPRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('codeVulnerabilityDetectorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('codeVulnerabilityDetectorTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('codeVulnerabilityFilePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceImageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceSubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceVpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrImageArchitecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrImageHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrImagePushedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrImageRegistry'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrImageRepositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrImageTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('epssScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('exploitAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('findingArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('findingStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('findingType'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstObservedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('fixAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('inspectorScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionExecutionRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionLastModifiedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionLayers'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionRuntime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastObservedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkProtocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('portRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('relatedVulnerabilities'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('vendorSeverity'),
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerabilityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerabilitySource'),
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerablePackages'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                            new \PHPStan\Type\Constant\ConstantStringType('startInclusive'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lowerInclusive'),
                            new \PHPStan\Type\Constant\ConstantStringType('upperInclusive'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                            new \PHPStan\Type\Constant\ConstantStringType('startInclusive'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lowerInclusive'),
                            new \PHPStan\Type\Constant\ConstantStringType('upperInclusive'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                            new \PHPStan\Type\Constant\ConstantStringType('startInclusive'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                            new \PHPStan\Type\Constant\ConstantStringType('startInclusive'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('beginInclusive'),
                            new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('endInclusive'),
                            new \PHPStan\Type\Constant\ConstantStringType('startInclusive'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('epoch'),
                            new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('release'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceLambdaLayerArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceLayerHash'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lowerInclusive'),
                                new \PHPStan\Type\Constant\ConstantStringType('upperInclusive'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('comparison'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PREFIX'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFindingAggregations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('aggregationType'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('responses'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FINDING_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PACKAGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY'),
                    new \PHPStan\Type\Constant\ConstantStringType('AMI'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_EC2_INSTANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_ECR_CONTAINER'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMAGE_LAYER'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA_FUNCTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_LAYER'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('amiAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsEcrContainerAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingTypeAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageLayerAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaLayerAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('packageAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('titleAggregation'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('exploitAvailableCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('fixAvailableCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('affectedInstances'),
                        new \PHPStan\Type\Constant\ConstantStringType('ami'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageSha'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ami'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('operatingSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('exploitAvailableCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('fixAvailableCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('layerHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('functionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('functionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('layerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('affectedImages'),
                        new \PHPStan\Type\Constant\ConstantStringType('repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
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
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerabilityId'),
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
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeVulnerabilityDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('epss'),
                    new \PHPStan\Type\Constant\ConstantStringType('exploitAvailable'),
                    new \PHPStan\Type\Constant\ConstantStringType('exploitabilityDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstObservedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('fixAvailable'),
                    new \PHPStan\Type\Constant\ConstantStringType('inspectorScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('inspectorScoreDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastObservedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkReachabilityDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('packageVulnerabilityDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('remediation'),
                    new \PHPStan\Type\Constant\ConstantStringType('resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cwes'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('referenceUrls'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceLambdaLayerArn'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('endLine'),
                            new \PHPStan\Type\Constant\ConstantStringType('fileName'),
                            new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('startLine'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('score'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('YES'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lastKnownExploitAt'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('YES'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('adjustedCvss'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('adjustments'),
                            new \PHPStan\Type\Constant\ConstantStringType('cvssSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('score'),
                            new \PHPStan\Type\Constant\ConstantStringType('scoreSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('scoringVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metric'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('networkPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('openPortRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('steps'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('componentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('componentType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('begin'),
                            new \PHPStan\Type\Constant\ConstantStringType('end'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cvss'),
                        new \PHPStan\Type\Constant\ConstantStringType('referenceUrls'),
                        new \PHPStan\Type\Constant\ConstantStringType('relatedVulnerabilities'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('vendorCreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('vendorSeverity'),
                        new \PHPStan\Type\Constant\ConstantStringType('vendorUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerabilityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerablePackages'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('baseScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('scoringVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arch'),
                            new \PHPStan\Type\Constant\ConstantStringType('epoch'),
                            new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixedInVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('packageManager'),
                            new \PHPStan\Type\Constant\ConstantStringType('release'),
                            new \PHPStan\Type\Constant\ConstantStringType('remediation'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceLambdaLayerArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceLayerHash'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BUNDLER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CARGO'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPOSER'),
                                new \PHPStan\Type\Constant\ConstantStringType('NPM'),
                                new \PHPStan\Type\Constant\ConstantStringType('NUGET'),
                                new \PHPStan\Type\Constant\ConstantStringType('PIPENV'),
                                new \PHPStan\Type\Constant\ConstantStringType('POETRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('YARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GOBINARY'),
                                new \PHPStan\Type\Constant\ConstantStringType('GOMOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('JAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('OS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PIP'),
                                new \PHPStan\Type\Constant\ConstantStringType('PYTHONPKG'),
                                new \PHPStan\Type\Constant\ConstantStringType('NODEPKG'),
                                new \PHPStan\Type\Constant\ConstantStringType('POM'),
                                new \PHPStan\Type\Constant\ConstantStringType('GEMSPEC'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOTNET_CORE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('partition'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsEc2Instance'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsEcrContainerImage'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsLambdaFunction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('iamInstanceProfileArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('imageId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipV4Addresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipV6Addresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('platform'),
                                new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                                new \PHPStan\Type\Constant\ConstantStringType('author'),
                                new \PHPStan\Type\Constant\ConstantStringType('imageHash'),
                                new \PHPStan\Type\Constant\ConstantStringType('imageTags'),
                                new \PHPStan\Type\Constant\ConstantStringType('platform'),
                                new \PHPStan\Type\Constant\ConstantStringType('pushedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('registry'),
                                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('architectures'),
                                new \PHPStan\Type\Constant\ConstantStringType('codeSha256'),
                                new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('functionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('layers'),
                                new \PHPStan\Type\Constant\ConstantStringType('packageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NODEJS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NODEJS_12_X'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NODEJS_14_X'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NODEJS_16_X'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JAVA_8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JAVA_8_AL2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JAVA_11'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3_7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3_8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3_9'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NODEJS_18_X'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GO_1_X'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JAVA_17'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3_10'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3_11'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOTNETCORE_3_1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOTNET_6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOTNET_7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RUBY_2_7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RUBY_3_2'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_EC2_INSTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_ECR_CONTAINER_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_ECR_REPOSITORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA_FUNCTION'),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNTRIAGED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPPRESSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NETWORK_REACHABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PACKAGE_VULNERABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CODE_VULNERABILITY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('members'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('delegatedAdminAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationshipStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVITED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESIGNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_VERIFICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_VERIFICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGION_DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANNOT_CREATE_DETECTOR_IN_ORG_MASTER'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function listUsageTotals(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('totals'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('usage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlyCost'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('USD'),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE_HOURS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECR_INITIAL_SCAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECR_RESCAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_FUNCTION_HOURS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_FUNCTION_CODE_HOURS'),
                        ]),
                    ])),
                ])),
            ]),
        ]);
    }
    private function resetEncryptionKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function searchVulnerabilities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('vulnerabilities'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('atigData'),
                    new \PHPStan\Type\Constant\ConstantStringType('cisaData'),
                    new \PHPStan\Type\Constant\ConstantStringType('cvss2'),
                    new \PHPStan\Type\Constant\ConstantStringType('cvss3'),
                    new \PHPStan\Type\Constant\ConstantStringType('cwes'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectionPlatforms'),
                    new \PHPStan\Type\Constant\ConstantStringType('epss'),
                    new \PHPStan\Type\Constant\ConstantStringType('exploitObserved'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('referenceUrls'),
                    new \PHPStan\Type\Constant\ConstantStringType('relatedVulnerabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('vendorCreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('vendorSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('vendorUpdatedAt'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('firstSeen'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSeen'),
                        new \PHPStan\Type\Constant\ConstantStringType('targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('ttps'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('dateAdded'),
                        new \PHPStan\Type\Constant\ConstantStringType('dateDue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('baseScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('scoringVector'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('baseScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('scoringVector'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('score'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('firstSeen'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSeen'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantStringType('NVD'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function sendCisSessionHealth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendCisSessionTelemetry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startCisSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopCisSession(): ?\PHPStan\Type\Type
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
    private function updateCisScanConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scanConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateEc2DeepInspectionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('orgPackagePaths'),
                new \PHPStan\Type\Constant\ConstantStringType('packagePaths'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function updateEncryptionKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateOrgEc2DeepInspectionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('autoEnable'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecr'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaCode'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
}