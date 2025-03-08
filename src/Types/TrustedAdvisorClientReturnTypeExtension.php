<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class TrustedAdvisorClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\TrustedAdvisor\TrustedAdvisorClient>
     */
    public function getClass(): string
    {
        return \Aws\TrustedAdvisor\TrustedAdvisorClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchUpdateRecommendationResourceExclusion',
            'getOrganizationRecommendation',
            'getRecommendation',
            'listChecks',
            'listOrganizationRecommendationAccounts',
            'listOrganizationRecommendationResources',
            'listOrganizationRecommendations',
            'listRecommendationResources',
            'listRecommendations',
            'updateOrganizationRecommendationLifecycle',
            'updateRecommendationLifecycle',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchUpdateRecommendationResourceExclusion' => $this->batchUpdateRecommendationResourceExclusion(),
            'getOrganizationRecommendation' => $this->getOrganizationRecommendation(),
            'getRecommendation' => $this->getRecommendation(),
            'listChecks' => $this->listChecks(),
            'listOrganizationRecommendationAccounts' => $this->listOrganizationRecommendationAccounts(),
            'listOrganizationRecommendationResources' => $this->listOrganizationRecommendationResources(),
            'listOrganizationRecommendations' => $this->listOrganizationRecommendations(),
            'listRecommendationResources' => $this->listRecommendationResources(),
            'listRecommendations' => $this->listRecommendations(),
            'updateOrganizationRecommendationLifecycle' => $this->updateOrganizationRecommendationLifecycle(),
            'updateRecommendationLifecycle' => $this->updateRecommendationLifecycle(),
        };
    }
    private function batchUpdateRecommendationResourceExclusion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('batchUpdateRecommendationResourceExclusionErrors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getOrganizationRecommendation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('organizationRecommendation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsServices'),
                    new \PHPStan\Type\Constant\ConstantStringType('checkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleStage'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pillarSpecificAggregates'),
                    new \PHPStan\Type\Constant\ConstantStringType('pillars'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolvedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesAggregates'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateReasonCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedOnBehalfOf'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedOnBehalfOfJobTitle'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('in_progress'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending_response'),
                        new \PHPStan\Type\Constant\ConstantStringType('dismissed'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolved'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('costOptimizing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedPercentMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('cost_optimizing'),
                        new \PHPStan\Type\Constant\ConstantStringType('performance'),
                        new \PHPStan\Type\Constant\ConstantStringType('security'),
                        new \PHPStan\Type\Constant\ConstantStringType('service_limits'),
                        new \PHPStan\Type\Constant\ConstantStringType('fault_tolerance'),
                        new \PHPStan\Type\Constant\ConstantStringType('operational_excellence'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('okCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('warningCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('aws_config'),
                        new \PHPStan\Type\Constant\ConstantStringType('compute_optimizer'),
                        new \PHPStan\Type\Constant\ConstantStringType('cost_explorer'),
                        new \PHPStan\Type\Constant\ConstantStringType('lse'),
                        new \PHPStan\Type\Constant\ConstantStringType('manual'),
                        new \PHPStan\Type\Constant\ConstantStringType('pse'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds'),
                        new \PHPStan\Type\Constant\ConstantStringType('resilience'),
                        new \PHPStan\Type\Constant\ConstantStringType('resilience_hub'),
                        new \PHPStan\Type\Constant\ConstantStringType('security_hub'),
                        new \PHPStan\Type\Constant\ConstantStringType('stir'),
                        new \PHPStan\Type\Constant\ConstantStringType('ta_check'),
                        new \PHPStan\Type\Constant\ConstantStringType('well_architected'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ok'),
                        new \PHPStan\Type\Constant\ConstantStringType('warning'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('non_critical_account'),
                        new \PHPStan\Type\Constant\ConstantStringType('temporary_account'),
                        new \PHPStan\Type\Constant\ConstantStringType('valid_business_case'),
                        new \PHPStan\Type\Constant\ConstantStringType('other_methods_available'),
                        new \PHPStan\Type\Constant\ConstantStringType('low_priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('not_applicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('other'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getRecommendation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsServices'),
                    new \PHPStan\Type\Constant\ConstantStringType('checkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleStage'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pillarSpecificAggregates'),
                    new \PHPStan\Type\Constant\ConstantStringType('pillars'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolvedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesAggregates'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateReasonCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedOnBehalfOf'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedOnBehalfOfJobTitle'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('in_progress'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending_response'),
                        new \PHPStan\Type\Constant\ConstantStringType('dismissed'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolved'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('costOptimizing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedPercentMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('cost_optimizing'),
                        new \PHPStan\Type\Constant\ConstantStringType('performance'),
                        new \PHPStan\Type\Constant\ConstantStringType('security'),
                        new \PHPStan\Type\Constant\ConstantStringType('service_limits'),
                        new \PHPStan\Type\Constant\ConstantStringType('fault_tolerance'),
                        new \PHPStan\Type\Constant\ConstantStringType('operational_excellence'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('okCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('warningCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('aws_config'),
                        new \PHPStan\Type\Constant\ConstantStringType('compute_optimizer'),
                        new \PHPStan\Type\Constant\ConstantStringType('cost_explorer'),
                        new \PHPStan\Type\Constant\ConstantStringType('lse'),
                        new \PHPStan\Type\Constant\ConstantStringType('manual'),
                        new \PHPStan\Type\Constant\ConstantStringType('pse'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds'),
                        new \PHPStan\Type\Constant\ConstantStringType('resilience'),
                        new \PHPStan\Type\Constant\ConstantStringType('resilience_hub'),
                        new \PHPStan\Type\Constant\ConstantStringType('security_hub'),
                        new \PHPStan\Type\Constant\ConstantStringType('stir'),
                        new \PHPStan\Type\Constant\ConstantStringType('ta_check'),
                        new \PHPStan\Type\Constant\ConstantStringType('well_architected'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ok'),
                        new \PHPStan\Type\Constant\ConstantStringType('warning'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('non_critical_account'),
                        new \PHPStan\Type\Constant\ConstantStringType('temporary_account'),
                        new \PHPStan\Type\Constant\ConstantStringType('valid_business_case'),
                        new \PHPStan\Type\Constant\ConstantStringType('other_methods_available'),
                        new \PHPStan\Type\Constant\ConstantStringType('low_priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('not_applicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('other'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listChecks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('checkSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsServices'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pillars'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('cost_optimizing'),
                        new \PHPStan\Type\Constant\ConstantStringType('performance'),
                        new \PHPStan\Type\Constant\ConstantStringType('security'),
                        new \PHPStan\Type\Constant\ConstantStringType('service_limits'),
                        new \PHPStan\Type\Constant\ConstantStringType('fault_tolerance'),
                        new \PHPStan\Type\Constant\ConstantStringType('operational_excellence'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('aws_config'),
                        new \PHPStan\Type\Constant\ConstantStringType('compute_optimizer'),
                        new \PHPStan\Type\Constant\ConstantStringType('cost_explorer'),
                        new \PHPStan\Type\Constant\ConstantStringType('lse'),
                        new \PHPStan\Type\Constant\ConstantStringType('manual'),
                        new \PHPStan\Type\Constant\ConstantStringType('pse'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds'),
                        new \PHPStan\Type\Constant\ConstantStringType('resilience'),
                        new \PHPStan\Type\Constant\ConstantStringType('resilience_hub'),
                        new \PHPStan\Type\Constant\ConstantStringType('security_hub'),
                        new \PHPStan\Type\Constant\ConstantStringType('stir'),
                        new \PHPStan\Type\Constant\ConstantStringType('ta_check'),
                        new \PHPStan\Type\Constant\ConstantStringType('well_architected'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOrganizationRecommendationAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountRecommendationLifecycleSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountRecommendationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleStage'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateReasonCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedOnBehalfOf'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedOnBehalfOfJobTitle'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('in_progress'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending_response'),
                        new \PHPStan\Type\Constant\ConstantStringType('dismissed'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolved'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('non_critical_account'),
                        new \PHPStan\Type\Constant\ConstantStringType('temporary_account'),
                        new \PHPStan\Type\Constant\ConstantStringType('valid_business_case'),
                        new \PHPStan\Type\Constant\ConstantStringType('other_methods_available'),
                        new \PHPStan\Type\Constant\ConstantStringType('low_priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('not_applicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('other'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOrganizationRecommendationResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('organizationRecommendationResourceSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('exclusionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('regionCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('included'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ok'),
                        new \PHPStan\Type\Constant\ConstantStringType('warning'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listOrganizationRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('organizationRecommendationSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsServices'),
                    new \PHPStan\Type\Constant\ConstantStringType('checkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleStage'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pillarSpecificAggregates'),
                    new \PHPStan\Type\Constant\ConstantStringType('pillars'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesAggregates'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('in_progress'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending_response'),
                        new \PHPStan\Type\Constant\ConstantStringType('dismissed'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolved'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('costOptimizing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedPercentMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('cost_optimizing'),
                        new \PHPStan\Type\Constant\ConstantStringType('performance'),
                        new \PHPStan\Type\Constant\ConstantStringType('security'),
                        new \PHPStan\Type\Constant\ConstantStringType('service_limits'),
                        new \PHPStan\Type\Constant\ConstantStringType('fault_tolerance'),
                        new \PHPStan\Type\Constant\ConstantStringType('operational_excellence'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('okCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('warningCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('aws_config'),
                        new \PHPStan\Type\Constant\ConstantStringType('compute_optimizer'),
                        new \PHPStan\Type\Constant\ConstantStringType('cost_explorer'),
                        new \PHPStan\Type\Constant\ConstantStringType('lse'),
                        new \PHPStan\Type\Constant\ConstantStringType('manual'),
                        new \PHPStan\Type\Constant\ConstantStringType('pse'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds'),
                        new \PHPStan\Type\Constant\ConstantStringType('resilience'),
                        new \PHPStan\Type\Constant\ConstantStringType('resilience_hub'),
                        new \PHPStan\Type\Constant\ConstantStringType('security_hub'),
                        new \PHPStan\Type\Constant\ConstantStringType('stir'),
                        new \PHPStan\Type\Constant\ConstantStringType('ta_check'),
                        new \PHPStan\Type\Constant\ConstantStringType('well_architected'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ok'),
                        new \PHPStan\Type\Constant\ConstantStringType('warning'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listRecommendationResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendationResourceSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('exclusionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('regionCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('included'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ok'),
                        new \PHPStan\Type\Constant\ConstantStringType('warning'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendationSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsServices'),
                    new \PHPStan\Type\Constant\ConstantStringType('checkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleStage'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pillarSpecificAggregates'),
                    new \PHPStan\Type\Constant\ConstantStringType('pillars'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesAggregates'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('in_progress'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending_response'),
                        new \PHPStan\Type\Constant\ConstantStringType('dismissed'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolved'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('costOptimizing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedPercentMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('cost_optimizing'),
                        new \PHPStan\Type\Constant\ConstantStringType('performance'),
                        new \PHPStan\Type\Constant\ConstantStringType('security'),
                        new \PHPStan\Type\Constant\ConstantStringType('service_limits'),
                        new \PHPStan\Type\Constant\ConstantStringType('fault_tolerance'),
                        new \PHPStan\Type\Constant\ConstantStringType('operational_excellence'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('okCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('warningCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('aws_config'),
                        new \PHPStan\Type\Constant\ConstantStringType('compute_optimizer'),
                        new \PHPStan\Type\Constant\ConstantStringType('cost_explorer'),
                        new \PHPStan\Type\Constant\ConstantStringType('lse'),
                        new \PHPStan\Type\Constant\ConstantStringType('manual'),
                        new \PHPStan\Type\Constant\ConstantStringType('pse'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds'),
                        new \PHPStan\Type\Constant\ConstantStringType('resilience'),
                        new \PHPStan\Type\Constant\ConstantStringType('resilience_hub'),
                        new \PHPStan\Type\Constant\ConstantStringType('security_hub'),
                        new \PHPStan\Type\Constant\ConstantStringType('stir'),
                        new \PHPStan\Type\Constant\ConstantStringType('ta_check'),
                        new \PHPStan\Type\Constant\ConstantStringType('well_architected'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ok'),
                        new \PHPStan\Type\Constant\ConstantStringType('warning'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateOrganizationRecommendationLifecycle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRecommendationLifecycle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}