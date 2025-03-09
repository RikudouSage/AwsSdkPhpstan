<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ResilienceHubClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ResilienceHub\ResilienceHubClient>
     */
    public function getClass(): string
    {
        return \Aws\ResilienceHub\ResilienceHubClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptResourceGroupingRecommendations',
            'addDraftAppVersionResourceMappings',
            'batchUpdateRecommendationStatus',
            'createApp',
            'createAppVersionAppComponent',
            'createAppVersionResource',
            'createRecommendationTemplate',
            'createResiliencyPolicy',
            'deleteApp',
            'deleteAppAssessment',
            'deleteAppInputSource',
            'deleteAppVersionAppComponent',
            'deleteAppVersionResource',
            'deleteRecommendationTemplate',
            'deleteResiliencyPolicy',
            'describeApp',
            'describeAppAssessment',
            'describeAppVersion',
            'describeAppVersionAppComponent',
            'describeAppVersionResource',
            'describeAppVersionResourcesResolutionStatus',
            'describeAppVersionTemplate',
            'describeDraftAppVersionResourcesImportStatus',
            'describeMetricsExport',
            'describeResiliencyPolicy',
            'describeResourceGroupingRecommendationTask',
            'importResourcesToDraftAppVersion',
            'listAlarmRecommendations',
            'listAppAssessmentComplianceDrifts',
            'listAppAssessmentResourceDrifts',
            'listAppAssessments',
            'listAppComponentCompliances',
            'listAppComponentRecommendations',
            'listAppInputSources',
            'listAppVersionAppComponents',
            'listAppVersionResourceMappings',
            'listAppVersionResources',
            'listAppVersions',
            'listApps',
            'listMetrics',
            'listRecommendationTemplates',
            'listResiliencyPolicies',
            'listResourceGroupingRecommendations',
            'listSopRecommendations',
            'listSuggestedResiliencyPolicies',
            'listTagsForResource',
            'listTestRecommendations',
            'listUnsupportedAppVersionResources',
            'publishAppVersion',
            'putDraftAppVersionTemplate',
            'rejectResourceGroupingRecommendations',
            'removeDraftAppVersionResourceMappings',
            'resolveAppVersionResources',
            'startAppAssessment',
            'startMetricsExport',
            'startResourceGroupingRecommendationTask',
            'tagResource',
            'untagResource',
            'updateApp',
            'updateAppVersion',
            'updateAppVersionAppComponent',
            'updateAppVersionResource',
            'updateResiliencyPolicy',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptResourceGroupingRecommendations' => $this->acceptResourceGroupingRecommendations(),
            'addDraftAppVersionResourceMappings' => $this->addDraftAppVersionResourceMappings(),
            'batchUpdateRecommendationStatus' => $this->batchUpdateRecommendationStatus(),
            'createApp' => $this->createApp(),
            'createAppVersionAppComponent' => $this->createAppVersionAppComponent(),
            'createAppVersionResource' => $this->createAppVersionResource(),
            'createRecommendationTemplate' => $this->createRecommendationTemplate(),
            'createResiliencyPolicy' => $this->createResiliencyPolicy(),
            'deleteApp' => $this->deleteApp(),
            'deleteAppAssessment' => $this->deleteAppAssessment(),
            'deleteAppInputSource' => $this->deleteAppInputSource(),
            'deleteAppVersionAppComponent' => $this->deleteAppVersionAppComponent(),
            'deleteAppVersionResource' => $this->deleteAppVersionResource(),
            'deleteRecommendationTemplate' => $this->deleteRecommendationTemplate(),
            'deleteResiliencyPolicy' => $this->deleteResiliencyPolicy(),
            'describeApp' => $this->describeApp(),
            'describeAppAssessment' => $this->describeAppAssessment(),
            'describeAppVersion' => $this->describeAppVersion(),
            'describeAppVersionAppComponent' => $this->describeAppVersionAppComponent(),
            'describeAppVersionResource' => $this->describeAppVersionResource(),
            'describeAppVersionResourcesResolutionStatus' => $this->describeAppVersionResourcesResolutionStatus(),
            'describeAppVersionTemplate' => $this->describeAppVersionTemplate(),
            'describeDraftAppVersionResourcesImportStatus' => $this->describeDraftAppVersionResourcesImportStatus(),
            'describeMetricsExport' => $this->describeMetricsExport(),
            'describeResiliencyPolicy' => $this->describeResiliencyPolicy(),
            'describeResourceGroupingRecommendationTask' => $this->describeResourceGroupingRecommendationTask(),
            'importResourcesToDraftAppVersion' => $this->importResourcesToDraftAppVersion(),
            'listAlarmRecommendations' => $this->listAlarmRecommendations(),
            'listAppAssessmentComplianceDrifts' => $this->listAppAssessmentComplianceDrifts(),
            'listAppAssessmentResourceDrifts' => $this->listAppAssessmentResourceDrifts(),
            'listAppAssessments' => $this->listAppAssessments(),
            'listAppComponentCompliances' => $this->listAppComponentCompliances(),
            'listAppComponentRecommendations' => $this->listAppComponentRecommendations(),
            'listAppInputSources' => $this->listAppInputSources(),
            'listAppVersionAppComponents' => $this->listAppVersionAppComponents(),
            'listAppVersionResourceMappings' => $this->listAppVersionResourceMappings(),
            'listAppVersionResources' => $this->listAppVersionResources(),
            'listAppVersions' => $this->listAppVersions(),
            'listApps' => $this->listApps(),
            'listMetrics' => $this->listMetrics(),
            'listRecommendationTemplates' => $this->listRecommendationTemplates(),
            'listResiliencyPolicies' => $this->listResiliencyPolicies(),
            'listResourceGroupingRecommendations' => $this->listResourceGroupingRecommendations(),
            'listSopRecommendations' => $this->listSopRecommendations(),
            'listSuggestedResiliencyPolicies' => $this->listSuggestedResiliencyPolicies(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTestRecommendations' => $this->listTestRecommendations(),
            'listUnsupportedAppVersionResources' => $this->listUnsupportedAppVersionResources(),
            'publishAppVersion' => $this->publishAppVersion(),
            'putDraftAppVersionTemplate' => $this->putDraftAppVersionTemplate(),
            'rejectResourceGroupingRecommendations' => $this->rejectResourceGroupingRecommendations(),
            'removeDraftAppVersionResourceMappings' => $this->removeDraftAppVersionResourceMappings(),
            'resolveAppVersionResources' => $this->resolveAppVersionResources(),
            'startAppAssessment' => $this->startAppAssessment(),
            'startMetricsExport' => $this->startMetricsExport(),
            'startResourceGroupingRecommendationTask' => $this->startResourceGroupingRecommendationTask(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateApp' => $this->updateApp(),
            'updateAppVersion' => $this->updateAppVersion(),
            'updateAppVersionAppComponent' => $this->updateAppVersionAppComponent(),
            'updateAppVersionResource' => $this->updateAppVersionResource(),
            'updateResiliencyPolicy' => $this->updateResiliencyPolicy(),
        };
    }
    private function acceptResourceGroupingRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('failedEntries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingRecommendationId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function addDraftAppVersionResourceMappings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceMappings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appRegistryAppName'),
                    new \PHPStan\Type\Constant\ConstantStringType('eksSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('logicalStackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('mappingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('physicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('terraformSourceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CfnStack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppRegistryApp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terraform'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Native'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchUpdateRecommendationStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('failedEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('successfulEntries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appComponentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('excludeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                    new \PHPStan\Type\Constant\ConstantStringType('item'),
                    new \PHPStan\Type\Constant\ConstantStringType('referenceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlreadyImplemented'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotRelevant'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplexityOfImplementation'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('app'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsApplicationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('driftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventSubscriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAppComplianceEvaluationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDriftEvaluationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastResiliencyScoreEvaluationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('permissionModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resiliencyScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('rpoInSecs'),
                    new \PHPStan\Type\Constant\ConstantStringType('rtoInSecs'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Daily'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotAssessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangesDetected'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotChecked'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotDetected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Detected'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('snsTopicArn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduledAssessmentFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('DriftDetected'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('crossAccountRoleArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('invokerRoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LegacyIAMUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleBased'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createAppVersionAppComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appComponent'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAppVersionResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('physicalResource'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('appComponents'),
                    new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                    new \PHPStan\Type\Constant\ConstantStringType('logicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('physicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eksSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('logicalStackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('terraformSourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Native'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AppTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Discovered'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createRecommendationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recommendationTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('needsReplacements'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('templatesLocation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CfnYaml'),
                        new \PHPStan\Type\Constant\ConstantStringType('CfnJson'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Alarm'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sop'),
                        new \PHPStan\Type\Constant\ConstantStringType('Test'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createResiliencyPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataLocationConstraint'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedCostTier'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('tier'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AnyLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('SameContinent'),
                        new \PHPStan\Type\Constant\ConstantStringType('SameCountry'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('L1'),
                        new \PHPStan\Type\Constant\ConstantStringType('L2'),
                        new \PHPStan\Type\Constant\ConstantStringType('L3'),
                        new \PHPStan\Type\Constant\ConstantStringType('L4'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Software'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoInSecs'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MissionCritical'),
                        new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                        new \PHPStan\Type\Constant\ConstantStringType('Important'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreServices'),
                        new \PHPStan\Type\Constant\ConstantStringType('NonCritical'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAppAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('assessmentStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                ]),
            ]),
        ]);
    }
    private function deleteAppInputSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appInputSource'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eksSourceClusterNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('importType'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('terraformSource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eksClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CfnStack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppRegistryApp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terraform'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3StateFileUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAppVersionAppComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appComponent'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAppVersionResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('physicalResource'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('appComponents'),
                    new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                    new \PHPStan\Type\Constant\ConstantStringType('logicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('physicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eksSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('logicalStackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('terraformSourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Native'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AppTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Discovered'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteRecommendationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recommendationTemplateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                ]),
            ]),
        ]);
    }
    private function deleteResiliencyPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('app'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsApplicationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('driftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventSubscriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAppComplianceEvaluationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDriftEvaluationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastResiliencyScoreEvaluationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('permissionModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resiliencyScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('rpoInSecs'),
                    new \PHPStan\Type\Constant\ConstantStringType('rtoInSecs'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Daily'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotAssessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangesDetected'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotChecked'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotDetected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Detected'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('snsTopicArn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduledAssessmentFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('DriftDetected'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('crossAccountRoleArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('invokerRoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LegacyIAMUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleBased'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeAppAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('compliance'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('cost'),
                    new \PHPStan\Type\Constant\ConstantStringType('driftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('invoker'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('resiliencyScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceErrorsDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Software'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('achievableRpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('achievableRtoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentRpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentRtoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('rpoDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('rpoReferenceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoReferenceId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amount'),
                        new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hourly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Daily'),
                            new \PHPStan\Type\Constant\ConstantStringType('Monthly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Yearly'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotChecked'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotDetected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Detected'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('User'),
                        new \PHPStan\Type\Constant\ConstantStringType('System'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataLocationConstraint'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedCostTier'),
                        new \PHPStan\Type\Constant\ConstantStringType('policy'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('tier'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AnyLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('SameContinent'),
                            new \PHPStan\Type\Constant\ConstantStringType('SameCountry'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('L1'),
                            new \PHPStan\Type\Constant\ConstantStringType('L2'),
                            new \PHPStan\Type\Constant\ConstantStringType('L3'),
                            new \PHPStan\Type\Constant\ConstantStringType('L4'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Software'),
                            new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                            new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('rpoInSecs'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtoInSecs'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MissionCritical'),
                            new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('Important'),
                            new \PHPStan\Type\Constant\ConstantStringType('CoreServices'),
                            new \PHPStan\Type\Constant\ConstantStringType('NonCritical'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('componentScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('disruptionScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('score'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Compliance'),
                            new \PHPStan\Type\Constant\ConstantStringType('Test'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarm'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sop'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('excludedCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('outstandingCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('possibleScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('score'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Software'),
                            new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                            new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ]), new \PHPStan\Type\FloatType()),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('hasMoreErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceErrors'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logicalResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('physicalResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('riskRecommendations'),
                        new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('appComponents'),
                            new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                            new \PHPStan\Type\Constant\ConstantStringType('risk'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeAppVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAppVersionAppComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appComponent'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAppVersionResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('physicalResource'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('appComponents'),
                    new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                    new \PHPStan\Type\Constant\ConstantStringType('logicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('physicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eksSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('logicalStackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('terraformSourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Native'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AppTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Discovered'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeAppVersionResourcesResolutionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('resolutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                ]),
            ]),
        ]);
    }
    private function describeAppVersionTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appTemplateBody'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDraftAppVersionResourcesImportStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('errorDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusChangeTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeMetricsExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('exportLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('metricsExportId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                ]),
            ]),
        ]);
    }
    private function describeResiliencyPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataLocationConstraint'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedCostTier'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('tier'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AnyLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('SameContinent'),
                        new \PHPStan\Type\Constant\ConstantStringType('SameCountry'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('L1'),
                        new \PHPStan\Type\Constant\ConstantStringType('L2'),
                        new \PHPStan\Type\Constant\ConstantStringType('L3'),
                        new \PHPStan\Type\Constant\ConstantStringType('L4'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Software'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoInSecs'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MissionCritical'),
                        new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                        new \PHPStan\Type\Constant\ConstantStringType('Important'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreServices'),
                        new \PHPStan\Type\Constant\ConstantStringType('NonCritical'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeResourceGroupingRecommendationTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('groupingId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                ]),
            ]),
        ]);
    }
    private function importResourcesToDraftAppVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('eksSources'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceArns'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('terraformSources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eksClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespaces'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3StateFileUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listAlarmRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('alarmRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appComponentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('appComponentNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('items'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('prerequisite'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('referenceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('alreadyImplemented'),
                        new \PHPStan\Type\Constant\ConstantStringType('discoveredAlarm'),
                        new \PHPStan\Type\Constant\ConstantStringType('excludeReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('latestDiscoveredExperiment'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetRegion'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('alarmArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AlreadyImplemented'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotRelevant'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComplexityOfImplementation'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('experimentArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('experimentTemplateId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Implemented'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotImplemented'),
                        new \PHPStan\Type\Constant\ConstantStringType('Excluded'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('Composite'),
                        new \PHPStan\Type\Constant\ConstantStringType('Canary'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logs'),
                        new \PHPStan\Type\Constant\ConstantStringType('Event'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppAssessmentComplianceDrifts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('complianceDrifts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actualReferenceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('actualValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('diffType'),
                    new \PHPStan\Type\Constant\ConstantStringType('driftType'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('expectedReferenceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('expectedValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Software'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('achievableRpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('achievableRtoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentRpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentRtoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('rpoDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('rpoReferenceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoReferenceId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotEqual'),
                        new \PHPStan\Type\Constant\ConstantStringType('Added'),
                        new \PHPStan\Type\Constant\ConstantStringType('Removed'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationCompliance'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppComponentResiliencyComplianceStatus'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Software'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('achievableRpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('achievableRtoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentRpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentRtoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('rpoDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('rpoReferenceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoReferenceId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppAssessmentResourceDrifts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceDrifts'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('diffType'),
                    new \PHPStan\Type\Constant\ConstantStringType('referenceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceIdentifier'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotEqual'),
                        new \PHPStan\Type\Constant\ConstantStringType('Added'),
                        new \PHPStan\Type\Constant\ConstantStringType('Removed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logicalResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('eksSourceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('logicalStackName'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('terraformSourceName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listAppAssessments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('cost'),
                    new \PHPStan\Type\Constant\ConstantStringType('driftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('invoker'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('resiliencyScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amount'),
                        new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hourly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Daily'),
                            new \PHPStan\Type\Constant\ConstantStringType('Monthly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Yearly'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotChecked'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotDetected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Detected'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('User'),
                        new \PHPStan\Type\Constant\ConstantStringType('System'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppComponentCompliances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('componentCompliances'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appComponentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('compliance'),
                    new \PHPStan\Type\Constant\ConstantStringType('cost'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('resiliencyScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Software'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('achievableRpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('achievableRtoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentRpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentRtoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('rpoDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('rpoReferenceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoReferenceId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amount'),
                        new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hourly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Daily'),
                            new \PHPStan\Type\Constant\ConstantStringType('Monthly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Yearly'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('componentScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('disruptionScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('score'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Compliance'),
                            new \PHPStan\Type\Constant\ConstantStringType('Test'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarm'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sop'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('excludedCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('outstandingCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('possibleScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('score'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Software'),
                            new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                            new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ]), new \PHPStan\Type\FloatType()),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppComponentRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('componentRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appComponentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('configRecommendations'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('appComponentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('compliance'),
                        new \PHPStan\Type\Constant\ConstantStringType('cost'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('haArchitecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('optimizationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('recommendationCompliance'),
                        new \PHPStan\Type\Constant\ConstantStringType('referenceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('suggestedChanges'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Software'),
                            new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                            new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('achievableRpoInSecs'),
                            new \PHPStan\Type\Constant\ConstantStringType('achievableRtoInSecs'),
                            new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentRpoInSecs'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentRtoInSecs'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('rpoDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('rpoReferenceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtoDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtoReferenceId'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                                new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                                new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('amount'),
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Hourly'),
                                new \PHPStan\Type\Constant\ConstantStringType('Daily'),
                                new \PHPStan\Type\Constant\ConstantStringType('Monthly'),
                                new \PHPStan\Type\Constant\ConstantStringType('Yearly'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MultiSite'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmStandby'),
                            new \PHPStan\Type\Constant\ConstantStringType('PilotLight'),
                            new \PHPStan\Type\Constant\ConstantStringType('BackupAndRestore'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoRecoveryPlan'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LeastCost'),
                            new \PHPStan\Type\Constant\ConstantStringType('LeastChange'),
                            new \PHPStan\Type\Constant\ConstantStringType('BestAZRecovery'),
                            new \PHPStan\Type\Constant\ConstantStringType('LeastErrors'),
                            new \PHPStan\Type\Constant\ConstantStringType('BestAttainable'),
                            new \PHPStan\Type\Constant\ConstantStringType('BestRegionRecovery'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Software'),
                            new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                            new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expectedComplianceStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('expectedRpoDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('expectedRpoInSecs'),
                            new \PHPStan\Type\Constant\ConstantStringType('expectedRtoDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('expectedRtoInSecs'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                                new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                                new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BreachedUnattainable'),
                        new \PHPStan\Type\Constant\ConstantStringType('BreachedCanMeet'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetCanImprove'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppInputSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appInputSources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eksSourceClusterNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('importType'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('terraformSource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eksClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CfnStack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppRegistryApp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terraform'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3StateFileUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppVersionAppComponents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appComponents'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppVersionResourceMappings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceMappings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appRegistryAppName'),
                    new \PHPStan\Type\Constant\ConstantStringType('eksSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('logicalStackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('mappingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('physicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('terraformSourceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CfnStack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppRegistryApp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terraform'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Native'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listAppVersionResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('physicalResources'),
                new \PHPStan\Type\Constant\ConstantStringType('resolutionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('appComponents'),
                    new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                    new \PHPStan\Type\Constant\ConstantStringType('logicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('physicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eksSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('logicalStackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('terraformSourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Native'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AppTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Discovered'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsApplicationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('driftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAppComplianceEvaluationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('resiliencyScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('rpoInSecs'),
                    new \PHPStan\Type\Constant\ConstantStringType('rtoInSecs'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Daily'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotAssessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangesDetected'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotChecked'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotDetected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Detected'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('rows'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
            ]),
        ]);
    }
    private function listRecommendationTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendationTemplates'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('needsReplacements'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationTemplateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('templatesLocation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CfnYaml'),
                        new \PHPStan\Type\Constant\ConstantStringType('CfnJson'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Alarm'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sop'),
                        new \PHPStan\Type\Constant\ConstantStringType('Test'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listResiliencyPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('resiliencyPolicies'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataLocationConstraint'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedCostTier'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('tier'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AnyLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('SameContinent'),
                        new \PHPStan\Type\Constant\ConstantStringType('SameCountry'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('L1'),
                        new \PHPStan\Type\Constant\ConstantStringType('L2'),
                        new \PHPStan\Type\Constant\ConstantStringType('L3'),
                        new \PHPStan\Type\Constant\ConstantStringType('L4'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Software'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoInSecs'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MissionCritical'),
                        new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                        new \PHPStan\Type\Constant\ConstantStringType('Important'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreServices'),
                        new \PHPStan\Type\Constant\ConstantStringType('NonCritical'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listResourceGroupingRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('groupingRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('confidenceLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingAppComponent'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingRecommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejectionReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('score'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                        new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('appComponentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('appComponentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('appComponentType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DistinctBusinessPurpose'),
                        new \PHPStan\Type\Constant\ConstantStringType('SeparateDataConcern'),
                        new \PHPStan\Type\Constant\ConstantStringType('DistinctUserGroupHandling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Other'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logicalResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('physicalResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceAppComponentIds'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('eksSourceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('logicalStackName'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('terraformSourceName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Native'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accepted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDecision'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSopRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('sopRecommendations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appComponentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('items'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('prerequisite'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('referenceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('alreadyImplemented'),
                        new \PHPStan\Type\Constant\ConstantStringType('discoveredAlarm'),
                        new \PHPStan\Type\Constant\ConstantStringType('excludeReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('latestDiscoveredExperiment'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetRegion'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('alarmArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AlreadyImplemented'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotRelevant'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComplexityOfImplementation'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('experimentArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('experimentTemplateId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Implemented'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotImplemented'),
                        new \PHPStan\Type\Constant\ConstantStringType('Excluded'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('SSM'),
                ])),
            ]),
        ]);
    }
    private function listSuggestedResiliencyPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('resiliencyPolicies'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataLocationConstraint'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedCostTier'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('tier'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AnyLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('SameContinent'),
                        new \PHPStan\Type\Constant\ConstantStringType('SameCountry'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('L1'),
                        new \PHPStan\Type\Constant\ConstantStringType('L2'),
                        new \PHPStan\Type\Constant\ConstantStringType('L3'),
                        new \PHPStan\Type\Constant\ConstantStringType('L4'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Software'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoInSecs'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MissionCritical'),
                        new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                        new \PHPStan\Type\Constant\ConstantStringType('Important'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreServices'),
                        new \PHPStan\Type\Constant\ConstantStringType('NonCritical'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                    ]),
                ])),
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
    private function listTestRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('testRecommendations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appComponentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('appComponentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('dependsOnAlarms'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('intent'),
                    new \PHPStan\Type\Constant\ConstantStringType('items'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('prerequisite'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('referenceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('risk'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('alreadyImplemented'),
                        new \PHPStan\Type\Constant\ConstantStringType('discoveredAlarm'),
                        new \PHPStan\Type\Constant\ConstantStringType('excludeReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                        new \PHPStan\Type\Constant\ConstantStringType('latestDiscoveredExperiment'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetRegion'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('alarmArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AlreadyImplemented'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotRelevant'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComplexityOfImplementation'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('experimentArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('experimentTemplateId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Implemented'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotImplemented'),
                        new \PHPStan\Type\Constant\ConstantStringType('Excluded'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Small'),
                        new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Software'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listUnsupportedAppVersionResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('resolutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('unsupportedResources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('logicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('physicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('unsupportedResourceStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eksSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('logicalStackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('terraformSourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Native'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function publishAppVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                new \PHPStan\Type\Constant\ConstantStringType('versionName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putDraftAppVersionTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rejectResourceGroupingRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('failedEntries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupingRecommendationId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function removeDraftAppVersionResourceMappings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resolveAppVersionResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('resolutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                ]),
            ]),
        ]);
    }
    private function startAppAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('compliance'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('cost'),
                    new \PHPStan\Type\Constant\ConstantStringType('driftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('invoker'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('resiliencyScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceErrorsDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Software'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('achievableRpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('achievableRtoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentRpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentRtoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('rpoDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('rpoReferenceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoReferenceId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amount'),
                        new \PHPStan\Type\Constant\ConstantStringType('currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hourly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Daily'),
                            new \PHPStan\Type\Constant\ConstantStringType('Monthly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Yearly'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotChecked'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotDetected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Detected'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('User'),
                        new \PHPStan\Type\Constant\ConstantStringType('System'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataLocationConstraint'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedCostTier'),
                        new \PHPStan\Type\Constant\ConstantStringType('policy'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('tier'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AnyLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('SameContinent'),
                            new \PHPStan\Type\Constant\ConstantStringType('SameCountry'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('L1'),
                            new \PHPStan\Type\Constant\ConstantStringType('L2'),
                            new \PHPStan\Type\Constant\ConstantStringType('L3'),
                            new \PHPStan\Type\Constant\ConstantStringType('L4'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Software'),
                            new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                            new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('rpoInSecs'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtoInSecs'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MissionCritical'),
                            new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('Important'),
                            new \PHPStan\Type\Constant\ConstantStringType('CoreServices'),
                            new \PHPStan\Type\Constant\ConstantStringType('NonCritical'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('componentScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('disruptionScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('score'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Compliance'),
                            new \PHPStan\Type\Constant\ConstantStringType('Test'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarm'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sop'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('excludedCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('outstandingCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('possibleScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('score'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Software'),
                            new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                            new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ]), new \PHPStan\Type\FloatType()),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('hasMoreErrors'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceErrors'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logicalResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('physicalResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('riskRecommendations'),
                        new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('appComponents'),
                            new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                            new \PHPStan\Type\Constant\ConstantStringType('risk'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startMetricsExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metricsExportId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                ]),
            ]),
        ]);
    }
    private function startResourceGroupingRecommendationTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('groupingId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
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
    private function updateApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('app'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assessmentSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsApplicationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('complianceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('driftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventSubscriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAppComplianceEvaluationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDriftEvaluationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastResiliencyScoreEvaluationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('permissionModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resiliencyScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('rpoInSecs'),
                    new \PHPStan\Type\Constant\ConstantStringType('rtoInSecs'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Daily'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyBreached'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyMet'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotAssessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangesDetected'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingPolicy'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotChecked'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotDetected'),
                        new \PHPStan\Type\Constant\ConstantStringType('Detected'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('snsTopicArn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduledAssessmentFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('DriftDetected'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('crossAccountRoleArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('invokerRoleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LegacyIAMUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleBased'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateAppVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAppVersionAppComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appComponent'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAppVersionResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('physicalResource'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('appComponents'),
                    new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                    new \PHPStan\Type\Constant\ConstantStringType('logicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('physicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eksSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('logicalStackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('terraformSourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Native'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AppTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Discovered'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateResiliencyPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataLocationConstraint'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedCostTier'),
                    new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('tier'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AnyLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('SameContinent'),
                        new \PHPStan\Type\Constant\ConstantStringType('SameCountry'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('L1'),
                        new \PHPStan\Type\Constant\ConstantStringType('L2'),
                        new \PHPStan\Type\Constant\ConstantStringType('L3'),
                        new \PHPStan\Type\Constant\ConstantStringType('L4'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Software'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hardware'),
                        new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rpoInSecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtoInSecs'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MissionCritical'),
                        new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                        new \PHPStan\Type\Constant\ConstantStringType('Important'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreServices'),
                        new \PHPStan\Type\Constant\ConstantStringType('NonCritical'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                    ]),
                ]),
            ]),
        ]);
    }
}