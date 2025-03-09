<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DataZoneClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DataZone\DataZoneClient>
     */
    public function getClass(): string
    {
        return \Aws\DataZone\DataZoneClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptPredictions',
            'acceptSubscriptionRequest',
            'addEntityOwner',
            'addPolicyGrant',
            'associateEnvironmentRole',
            'cancelMetadataGenerationRun',
            'cancelSubscription',
            'createAsset',
            'createAssetFilter',
            'createAssetRevision',
            'createAssetType',
            'createConnection',
            'createDataProduct',
            'createDataProductRevision',
            'createDataSource',
            'createDomain',
            'createDomainUnit',
            'createEnvironment',
            'createEnvironmentAction',
            'createEnvironmentProfile',
            'createFormType',
            'createGlossary',
            'createGlossaryTerm',
            'createGroupProfile',
            'createListingChangeSet',
            'createProject',
            'createProjectMembership',
            'createProjectProfile',
            'createRule',
            'createSubscriptionGrant',
            'createSubscriptionRequest',
            'createSubscriptionTarget',
            'createUserProfile',
            'deleteAsset',
            'deleteAssetFilter',
            'deleteAssetType',
            'deleteConnection',
            'deleteDataProduct',
            'deleteDataSource',
            'deleteDomain',
            'deleteDomainUnit',
            'deleteEnvironment',
            'deleteEnvironmentAction',
            'deleteEnvironmentBlueprintConfiguration',
            'deleteEnvironmentProfile',
            'deleteFormType',
            'deleteGlossary',
            'deleteGlossaryTerm',
            'deleteListing',
            'deleteProject',
            'deleteProjectMembership',
            'deleteProjectProfile',
            'deleteRule',
            'deleteSubscriptionGrant',
            'deleteSubscriptionRequest',
            'deleteSubscriptionTarget',
            'deleteTimeSeriesDataPoints',
            'disassociateEnvironmentRole',
            'getAsset',
            'getAssetFilter',
            'getAssetType',
            'getConnection',
            'getDataProduct',
            'getDataSource',
            'getDataSourceRun',
            'getDomain',
            'getDomainUnit',
            'getEnvironment',
            'getEnvironmentAction',
            'getEnvironmentBlueprint',
            'getEnvironmentBlueprintConfiguration',
            'getEnvironmentCredentials',
            'getEnvironmentProfile',
            'getFormType',
            'getGlossary',
            'getGlossaryTerm',
            'getGroupProfile',
            'getIamPortalLoginUrl',
            'getJobRun',
            'getLineageEvent',
            'getLineageNode',
            'getListing',
            'getMetadataGenerationRun',
            'getProject',
            'getProjectProfile',
            'getRule',
            'getSubscription',
            'getSubscriptionGrant',
            'getSubscriptionRequestDetails',
            'getSubscriptionTarget',
            'getTimeSeriesDataPoint',
            'getUserProfile',
            'listAssetFilters',
            'listAssetRevisions',
            'listConnections',
            'listDataProductRevisions',
            'listDataSourceRunActivities',
            'listDataSourceRuns',
            'listDataSources',
            'listDomainUnitsForParent',
            'listDomains',
            'listEntityOwners',
            'listEnvironmentActions',
            'listEnvironmentBlueprintConfigurations',
            'listEnvironmentBlueprints',
            'listEnvironmentProfiles',
            'listEnvironments',
            'listJobRuns',
            'listLineageEvents',
            'listLineageNodeHistory',
            'listMetadataGenerationRuns',
            'listNotifications',
            'listPolicyGrants',
            'listProjectMemberships',
            'listProjectProfiles',
            'listProjects',
            'listRules',
            'listSubscriptionGrants',
            'listSubscriptionRequests',
            'listSubscriptionTargets',
            'listSubscriptions',
            'listTagsForResource',
            'listTimeSeriesDataPoints',
            'postLineageEvent',
            'postTimeSeriesDataPoints',
            'putEnvironmentBlueprintConfiguration',
            'rejectPredictions',
            'rejectSubscriptionRequest',
            'removeEntityOwner',
            'removePolicyGrant',
            'revokeSubscription',
            'search',
            'searchGroupProfiles',
            'searchListings',
            'searchTypes',
            'searchUserProfiles',
            'startDataSourceRun',
            'startMetadataGenerationRun',
            'tagResource',
            'untagResource',
            'updateAssetFilter',
            'updateConnection',
            'updateDataSource',
            'updateDomain',
            'updateDomainUnit',
            'updateEnvironment',
            'updateEnvironmentAction',
            'updateEnvironmentProfile',
            'updateGlossary',
            'updateGlossaryTerm',
            'updateGroupProfile',
            'updateProject',
            'updateProjectProfile',
            'updateRule',
            'updateSubscriptionGrantStatus',
            'updateSubscriptionRequest',
            'updateSubscriptionTarget',
            'updateUserProfile',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptPredictions' => $this->acceptPredictions(),
            'acceptSubscriptionRequest' => $this->acceptSubscriptionRequest(),
            'addEntityOwner' => $this->addEntityOwner(),
            'addPolicyGrant' => $this->addPolicyGrant(),
            'associateEnvironmentRole' => $this->associateEnvironmentRole(),
            'cancelMetadataGenerationRun' => $this->cancelMetadataGenerationRun(),
            'cancelSubscription' => $this->cancelSubscription(),
            'createAsset' => $this->createAsset(),
            'createAssetFilter' => $this->createAssetFilter(),
            'createAssetRevision' => $this->createAssetRevision(),
            'createAssetType' => $this->createAssetType(),
            'createConnection' => $this->createConnection(),
            'createDataProduct' => $this->createDataProduct(),
            'createDataProductRevision' => $this->createDataProductRevision(),
            'createDataSource' => $this->createDataSource(),
            'createDomain' => $this->createDomain(),
            'createDomainUnit' => $this->createDomainUnit(),
            'createEnvironment' => $this->createEnvironment(),
            'createEnvironmentAction' => $this->createEnvironmentAction(),
            'createEnvironmentProfile' => $this->createEnvironmentProfile(),
            'createFormType' => $this->createFormType(),
            'createGlossary' => $this->createGlossary(),
            'createGlossaryTerm' => $this->createGlossaryTerm(),
            'createGroupProfile' => $this->createGroupProfile(),
            'createListingChangeSet' => $this->createListingChangeSet(),
            'createProject' => $this->createProject(),
            'createProjectMembership' => $this->createProjectMembership(),
            'createProjectProfile' => $this->createProjectProfile(),
            'createRule' => $this->createRule(),
            'createSubscriptionGrant' => $this->createSubscriptionGrant(),
            'createSubscriptionRequest' => $this->createSubscriptionRequest(),
            'createSubscriptionTarget' => $this->createSubscriptionTarget(),
            'createUserProfile' => $this->createUserProfile(),
            'deleteAsset' => $this->deleteAsset(),
            'deleteAssetFilter' => $this->deleteAssetFilter(),
            'deleteAssetType' => $this->deleteAssetType(),
            'deleteConnection' => $this->deleteConnection(),
            'deleteDataProduct' => $this->deleteDataProduct(),
            'deleteDataSource' => $this->deleteDataSource(),
            'deleteDomain' => $this->deleteDomain(),
            'deleteDomainUnit' => $this->deleteDomainUnit(),
            'deleteEnvironment' => $this->deleteEnvironment(),
            'deleteEnvironmentAction' => $this->deleteEnvironmentAction(),
            'deleteEnvironmentBlueprintConfiguration' => $this->deleteEnvironmentBlueprintConfiguration(),
            'deleteEnvironmentProfile' => $this->deleteEnvironmentProfile(),
            'deleteFormType' => $this->deleteFormType(),
            'deleteGlossary' => $this->deleteGlossary(),
            'deleteGlossaryTerm' => $this->deleteGlossaryTerm(),
            'deleteListing' => $this->deleteListing(),
            'deleteProject' => $this->deleteProject(),
            'deleteProjectMembership' => $this->deleteProjectMembership(),
            'deleteProjectProfile' => $this->deleteProjectProfile(),
            'deleteRule' => $this->deleteRule(),
            'deleteSubscriptionGrant' => $this->deleteSubscriptionGrant(),
            'deleteSubscriptionRequest' => $this->deleteSubscriptionRequest(),
            'deleteSubscriptionTarget' => $this->deleteSubscriptionTarget(),
            'deleteTimeSeriesDataPoints' => $this->deleteTimeSeriesDataPoints(),
            'disassociateEnvironmentRole' => $this->disassociateEnvironmentRole(),
            'getAsset' => $this->getAsset(),
            'getAssetFilter' => $this->getAssetFilter(),
            'getAssetType' => $this->getAssetType(),
            'getConnection' => $this->getConnection(),
            'getDataProduct' => $this->getDataProduct(),
            'getDataSource' => $this->getDataSource(),
            'getDataSourceRun' => $this->getDataSourceRun(),
            'getDomain' => $this->getDomain(),
            'getDomainUnit' => $this->getDomainUnit(),
            'getEnvironment' => $this->getEnvironment(),
            'getEnvironmentAction' => $this->getEnvironmentAction(),
            'getEnvironmentBlueprint' => $this->getEnvironmentBlueprint(),
            'getEnvironmentBlueprintConfiguration' => $this->getEnvironmentBlueprintConfiguration(),
            'getEnvironmentCredentials' => $this->getEnvironmentCredentials(),
            'getEnvironmentProfile' => $this->getEnvironmentProfile(),
            'getFormType' => $this->getFormType(),
            'getGlossary' => $this->getGlossary(),
            'getGlossaryTerm' => $this->getGlossaryTerm(),
            'getGroupProfile' => $this->getGroupProfile(),
            'getIamPortalLoginUrl' => $this->getIamPortalLoginUrl(),
            'getJobRun' => $this->getJobRun(),
            'getLineageEvent' => $this->getLineageEvent(),
            'getLineageNode' => $this->getLineageNode(),
            'getListing' => $this->getListing(),
            'getMetadataGenerationRun' => $this->getMetadataGenerationRun(),
            'getProject' => $this->getProject(),
            'getProjectProfile' => $this->getProjectProfile(),
            'getRule' => $this->getRule(),
            'getSubscription' => $this->getSubscription(),
            'getSubscriptionGrant' => $this->getSubscriptionGrant(),
            'getSubscriptionRequestDetails' => $this->getSubscriptionRequestDetails(),
            'getSubscriptionTarget' => $this->getSubscriptionTarget(),
            'getTimeSeriesDataPoint' => $this->getTimeSeriesDataPoint(),
            'getUserProfile' => $this->getUserProfile(),
            'listAssetFilters' => $this->listAssetFilters(),
            'listAssetRevisions' => $this->listAssetRevisions(),
            'listConnections' => $this->listConnections(),
            'listDataProductRevisions' => $this->listDataProductRevisions(),
            'listDataSourceRunActivities' => $this->listDataSourceRunActivities(),
            'listDataSourceRuns' => $this->listDataSourceRuns(),
            'listDataSources' => $this->listDataSources(),
            'listDomainUnitsForParent' => $this->listDomainUnitsForParent(),
            'listDomains' => $this->listDomains(),
            'listEntityOwners' => $this->listEntityOwners(),
            'listEnvironmentActions' => $this->listEnvironmentActions(),
            'listEnvironmentBlueprintConfigurations' => $this->listEnvironmentBlueprintConfigurations(),
            'listEnvironmentBlueprints' => $this->listEnvironmentBlueprints(),
            'listEnvironmentProfiles' => $this->listEnvironmentProfiles(),
            'listEnvironments' => $this->listEnvironments(),
            'listJobRuns' => $this->listJobRuns(),
            'listLineageEvents' => $this->listLineageEvents(),
            'listLineageNodeHistory' => $this->listLineageNodeHistory(),
            'listMetadataGenerationRuns' => $this->listMetadataGenerationRuns(),
            'listNotifications' => $this->listNotifications(),
            'listPolicyGrants' => $this->listPolicyGrants(),
            'listProjectMemberships' => $this->listProjectMemberships(),
            'listProjectProfiles' => $this->listProjectProfiles(),
            'listProjects' => $this->listProjects(),
            'listRules' => $this->listRules(),
            'listSubscriptionGrants' => $this->listSubscriptionGrants(),
            'listSubscriptionRequests' => $this->listSubscriptionRequests(),
            'listSubscriptionTargets' => $this->listSubscriptionTargets(),
            'listSubscriptions' => $this->listSubscriptions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTimeSeriesDataPoints' => $this->listTimeSeriesDataPoints(),
            'postLineageEvent' => $this->postLineageEvent(),
            'postTimeSeriesDataPoints' => $this->postTimeSeriesDataPoints(),
            'putEnvironmentBlueprintConfiguration' => $this->putEnvironmentBlueprintConfiguration(),
            'rejectPredictions' => $this->rejectPredictions(),
            'rejectSubscriptionRequest' => $this->rejectSubscriptionRequest(),
            'removeEntityOwner' => $this->removeEntityOwner(),
            'removePolicyGrant' => $this->removePolicyGrant(),
            'revokeSubscription' => $this->revokeSubscription(),
            'search' => $this->search(),
            'searchGroupProfiles' => $this->searchGroupProfiles(),
            'searchListings' => $this->searchListings(),
            'searchTypes' => $this->searchTypes(),
            'searchUserProfiles' => $this->searchUserProfiles(),
            'startDataSourceRun' => $this->startDataSourceRun(),
            'startMetadataGenerationRun' => $this->startMetadataGenerationRun(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAssetFilter' => $this->updateAssetFilter(),
            'updateConnection' => $this->updateConnection(),
            'updateDataSource' => $this->updateDataSource(),
            'updateDomain' => $this->updateDomain(),
            'updateDomainUnit' => $this->updateDomainUnit(),
            'updateEnvironment' => $this->updateEnvironment(),
            'updateEnvironmentAction' => $this->updateEnvironmentAction(),
            'updateEnvironmentProfile' => $this->updateEnvironmentProfile(),
            'updateGlossary' => $this->updateGlossary(),
            'updateGlossaryTerm' => $this->updateGlossaryTerm(),
            'updateGroupProfile' => $this->updateGroupProfile(),
            'updateProject' => $this->updateProject(),
            'updateProjectProfile' => $this->updateProjectProfile(),
            'updateRule' => $this->updateRule(),
            'updateSubscriptionGrantStatus' => $this->updateSubscriptionGrantStatus(),
            'updateSubscriptionRequest' => $this->updateSubscriptionRequest(),
            'updateSubscriptionTarget' => $this->updateSubscriptionTarget(),
            'updateUserProfile' => $this->updateUserProfile(),
        };
    }
    private function acceptPredictions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function acceptSubscriptionRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('decisionComment'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('existingSubscriptionId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('metadataForms'),
                new \PHPStan\Type\Constant\ConstantStringType('requestReason'),
                new \PHPStan\Type\Constant\ConstantStringType('reviewerId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedListings'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedPrincipals'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('item'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                        new \PHPStan\Type\Constant\ConstantStringType('productListing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('forms'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetListings'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function addEntityOwner(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function addPolicyGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateEnvironmentRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelMetadataGenerationRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('retainPermissions'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedListing'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionRequestId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('item'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                        new \PHPStan\Type\Constant\ConstantStringType('productListing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('forms'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetListings'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('externalIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('latestTimeSeriesDataPointFormsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('listing'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('predictionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('readOnlyFormsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contentSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('listingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('listingStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('businessNameGeneration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAssetFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('effectiveColumnNames'),
                new \PHPStan\Type\Constant\ConstantStringType('effectiveRowFilter'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('columnConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('rowConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('includedColumnNames'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rowFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('sensitive'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('and'),
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('or'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('equalTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('greaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('greaterThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('in'),
                                new \PHPStan\Type\Constant\ConstantStringType('isNotNull'),
                                new \PHPStan\Type\Constant\ConstantStringType('isNull'),
                                new \PHPStan\Type\Constant\ConstantStringType('lessThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('lessThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('like'),
                                new \PHPStan\Type\Constant\ConstantStringType('notEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('notIn'),
                                new \PHPStan\Type\Constant\ConstantStringType('notLike'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                ]),
            ]),
        ]);
    }
    private function createAssetRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('externalIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('latestTimeSeriesDataPointFormsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('listing'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('predictionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('readOnlyFormsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contentSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('listingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('listingStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('businessNameGeneration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAssetType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('originDomainId'),
                new \PHPStan\Type\Constant\ConstantStringType('originProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('required'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('physicalEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('props'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('glueConnection'),
                    new \PHPStan\Type\Constant\ConstantStringType('glueConnectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('host'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('stage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamConnectionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('athenaProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatibleComputeEnvironments'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionSchemaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastConnectionValidationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('matchCriteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('physicalConnectionRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('pythonProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('sparkProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('oAuth2Properties'),
                            new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH2'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authorizationCodeProperties'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuth2ClientApplication'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuth2Credentials'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuth2GrantType'),
                                new \PHPStan\Type\Constant\ConstantStringType('tokenUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('tokenUrlParametersMap'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('authorizationCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirectUri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('aWSManagedClientApplicationReference'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userManagedClientApplicationClientId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accessToken'),
                                    new \PHPStan\Type\Constant\ConstantStringType('jwtToken'),
                                    new \PHPStan\Type\Constant\ConstantStringType('refreshToken'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userManagedClientApplicationClientSecret'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZATION_CODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JWT_BEARER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                            new \PHPStan\Type\Constant\ConstantStringType('PYTHON'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATABRICKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                            new \PHPStan\Type\Constant\ConstantStringType('HYPERPOD'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERADATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('VERTICA'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORKFLOWS_MWAA'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroupIdList'),
                            new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('subnetIdList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLUE_INTERACTIVE_SESSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('JDBC'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIVY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ODBC'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRISM'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('athenaProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('glueProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('hyperPodProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sparkEmrProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sparkGlueProperties'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('orchestrator'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SLURM'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueLineageSyncEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('isProvisionedSecret'),
                        new \PHPStan\Type\Constant\ConstantStringType('jdbcIamUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('jdbcUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('lineageSync'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftTempDir'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('storage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('usernamePassword'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('password'),
                                new \PHPStan\Type\Constant\ConstantStringType('username'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('lineageJobId'),
                            new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                            new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('computeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentialsExpiration'),
                        new \PHPStan\Type\Constant\ConstantStringType('governanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('javaVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('livyEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('logUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('pythonVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('trustedCertificatesS3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('password'),
                            new \PHPStan\Type\Constant\ConstantStringType('username'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('USER_MANAGED'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('additionalArgs'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('idleTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('javaVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfWorkers'),
                        new \PHPStan\Type\Constant\ConstantStringType('pythonVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('workerType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                    new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                    new \PHPStan\Type\Constant\ConstantStringType('DATABRICKS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                    new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                    new \PHPStan\Type\Constant\ConstantStringType('HYPERPOD'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERADATA'),
                    new \PHPStan\Type\Constant\ConstantStringType('VERTICA'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORKFLOWS_MWAA'),
                ]),
            ]),
        ]);
    }
    private function createDataProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('itemType'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function createDataProductRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('itemType'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function createDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetFormsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('enableSetting'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('publishOnImport'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('glueRunConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftRunConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('sageMakerRunConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoImportDataQualityResult'),
                        new \PHPStan\Type\Constant\ConstantStringType('catalogName'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataAccessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('relationalFilterConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpressions'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataAccessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftCredentialConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('relationalFilterConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('secretManagerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftClusterSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftServerlessSource'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpressions'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('trackingAssets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enableBusinessNameGeneration'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('timezone'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UTC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFRICA_JOHANNESBURG'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMERICA_MONTREAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMERICA_SAO_PAULO'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_BAHRAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_BANGKOK'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_CALCUTTA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_DUBAI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_HONG_KONG'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_JAKARTA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_KUALA_LUMPUR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SEOUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SHANGHAI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SINGAPORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_TAIPEI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_TOKYO'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUSTRALIA_MELBOURNE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUSTRALIA_SYDNEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANADA_CENTRAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CET'),
                        new \PHPStan\Type\Constant\ConstantStringType('CST6CDT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_10'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_12'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_7'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_9'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_10'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_12'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_14'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_7'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_9'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_DUBLIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_LONDON'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_PARIS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_STOCKHOLM'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_ZURICH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ISRAEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEXICO_GENERAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MST7MDT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PACIFIC_AUCKLAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_CENTRAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_EASTERN'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_MOUNTAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_PACIFIC'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainExecutionRole'),
                new \PHPStan\Type\Constant\ConstantStringType('domainVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('portalUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('rootDomainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                new \PHPStan\Type\Constant\ConstantStringType('singleSignOn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('V1'),
                    new \PHPStan\Type\Constant\ConstantStringType('V2'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('userAssignment'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_IDC'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createDomainUnit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ancestorDomainUnitIds'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owners'),
                new \PHPStan\Type\Constant\ConstantStringType('parentDomainUnitId'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('group'),
                    new \PHPStan\Type\Constant\ConstantStringType('user'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentActions'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastDeployment'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedResources'),
                new \PHPStan\Type\Constant\ConstantStringType('provisioningProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('userParameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTimeoutMinutes'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('auth'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('isDeploymentComplete'),
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cloudFormation'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('templateUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldType'),
                    new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                    new \PHPStan\Type\Constant\ConstantStringType('isOptional'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createEnvironmentAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsConsoleLink'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createEnvironmentProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('userParameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldType'),
                    new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                    new \PHPStan\Type\Constant\ConstantStringType('isOptional'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createFormType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('originDomainId'),
                new \PHPStan\Type\Constant\ConstantStringType('originProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createGlossary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                ]),
            ]),
        ]);
    }
    private function createGlossaryTerm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('longDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('termRelations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('classifies'),
                    new \PHPStan\Type\Constant\ConstantStringType('isA'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createGroupProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSIGNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ASSIGNED'),
                ]),
            ]),
        ]);
    }
    private function createListingChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('listingId'),
                new \PHPStan\Type\Constant\ConstantStringType('listingRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
            ]),
        ]);
    }
    private function createProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentDeploymentDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('projectStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('userParameters'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentFailureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('overallDeploymentStatus'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]))),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DEPLOYMENT'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function createProjectMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createProjectProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentOrder'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountIdPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('regionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('regionNamePath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('parameterOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolvedParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('ssmPath'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function createRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('action'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('detail'),
                new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('ruleType'),
                new \PHPStan\Type\Constant\ConstantStringType('scope'),
                new \PHPStan\Type\Constant\ConstantStringType('target'),
                new \PHPStan\Type\Constant\ConstantStringType('targetType'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('CREATE_SUBSCRIPTION_REQUEST'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('metadataFormEnforcementDetail'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('requiredMetadataForms'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('METADATA_FORM_ENFORCEMENT'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProduct'),
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('specificAssetTypes'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('specificProjects'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainUnitTarget'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_UNIT'),
            ]),
        ]);
    }
    private function createSubscriptionGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assets'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('grantedEntity'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionId'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionTargetId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('grantedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('listing'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('GRANT_AND_REVOKE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSubscriptionRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('decisionComment'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('existingSubscriptionId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('metadataForms'),
                new \PHPStan\Type\Constant\ConstantStringType('requestReason'),
                new \PHPStan\Type\Constant\ConstantStringType('reviewerId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedListings'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedPrincipals'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('item'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                        new \PHPStan\Type\Constant\ConstantStringType('productListing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('forms'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetListings'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSubscriptionTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicableAssetTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizedPrincipals'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('manageAccessRole'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionTargetConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUserProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('details'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('iam'),
                    new \PHPStan\Type\Constant\ConstantStringType('sso'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                        new \PHPStan\Type\Constant\ConstantStringType('username'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSIGNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ASSIGNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSO'),
                ]),
            ]),
        ]);
    }
    private function deleteAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAssetFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAssetType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDataProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetFormsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('enableSetting'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('publishOnImport'),
                new \PHPStan\Type\Constant\ConstantStringType('retainPermissionsOnRevokeFailure'),
                new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                new \PHPStan\Type\Constant\ConstantStringType('selfGrantStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('glueRunConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftRunConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('sageMakerRunConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoImportDataQualityResult'),
                        new \PHPStan\Type\Constant\ConstantStringType('catalogName'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataAccessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('relationalFilterConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpressions'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataAccessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftCredentialConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('relationalFilterConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('secretManagerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftClusterSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftServerlessSource'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpressions'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('trackingAssets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('timezone'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UTC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFRICA_JOHANNESBURG'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMERICA_MONTREAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMERICA_SAO_PAULO'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_BAHRAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_BANGKOK'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_CALCUTTA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_DUBAI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_HONG_KONG'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_JAKARTA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_KUALA_LUMPUR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SEOUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SHANGHAI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SINGAPORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_TAIPEI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_TOKYO'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUSTRALIA_MELBOURNE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUSTRALIA_SYDNEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANADA_CENTRAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CET'),
                        new \PHPStan\Type\Constant\ConstantStringType('CST6CDT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_10'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_12'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_7'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_9'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_10'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_12'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_14'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_7'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_9'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_DUBLIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_LONDON'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_PARIS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_STOCKHOLM'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_ZURICH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ISRAEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEXICO_GENERAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MST7MDT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PACIFIC_AUCKLAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_CENTRAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_EASTERN'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_MOUNTAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_PACIFIC'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('glueSelfGrantStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftSelfGrantStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selfGrantStatusDetails'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selfGrantStatusDetails'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                ]),
            ]),
        ]);
    }
    private function deleteDomainUnit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteEnvironmentAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteEnvironmentBlueprintConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEnvironmentProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFormType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteGlossary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteGlossaryTerm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteListing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProjectMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProjectProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSubscriptionGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assets'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('grantedEntity'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionId'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionTargetId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('grantedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('listing'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('GRANT_AND_REVOKE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteSubscriptionRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSubscriptionTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTimeSeriesDataPoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateEnvironmentRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('externalIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('latestTimeSeriesDataPointFormsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('listing'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('readOnlyFormsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contentSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('listingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('listingStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAssetFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('effectiveColumnNames'),
                new \PHPStan\Type\Constant\ConstantStringType('effectiveRowFilter'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('columnConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('rowConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('includedColumnNames'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rowFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('sensitive'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('and'),
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('or'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('equalTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('greaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('greaterThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('in'),
                                new \PHPStan\Type\Constant\ConstantStringType('isNotNull'),
                                new \PHPStan\Type\Constant\ConstantStringType('isNull'),
                                new \PHPStan\Type\Constant\ConstantStringType('lessThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('lessThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('like'),
                                new \PHPStan\Type\Constant\ConstantStringType('notEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('notIn'),
                                new \PHPStan\Type\Constant\ConstantStringType('notLike'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                ]),
            ]),
        ]);
    }
    private function getAssetType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('originDomainId'),
                new \PHPStan\Type\Constant\ConstantStringType('originProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('required'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectionCredentials'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentUserRole'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('physicalEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('props'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('expiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('secretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionToken'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('glueConnection'),
                    new \PHPStan\Type\Constant\ConstantStringType('glueConnectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('host'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('stage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamConnectionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('athenaProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatibleComputeEnvironments'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionSchemaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastConnectionValidationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('matchCriteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('physicalConnectionRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('pythonProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('sparkProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('oAuth2Properties'),
                            new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH2'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authorizationCodeProperties'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuth2ClientApplication'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuth2Credentials'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuth2GrantType'),
                                new \PHPStan\Type\Constant\ConstantStringType('tokenUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('tokenUrlParametersMap'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('authorizationCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirectUri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('aWSManagedClientApplicationReference'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userManagedClientApplicationClientId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accessToken'),
                                    new \PHPStan\Type\Constant\ConstantStringType('jwtToken'),
                                    new \PHPStan\Type\Constant\ConstantStringType('refreshToken'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userManagedClientApplicationClientSecret'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZATION_CODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JWT_BEARER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                            new \PHPStan\Type\Constant\ConstantStringType('PYTHON'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATABRICKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                            new \PHPStan\Type\Constant\ConstantStringType('HYPERPOD'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERADATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('VERTICA'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORKFLOWS_MWAA'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroupIdList'),
                            new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('subnetIdList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLUE_INTERACTIVE_SESSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('JDBC'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIVY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ODBC'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRISM'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('athenaProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('glueProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('hyperPodProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sparkEmrProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sparkGlueProperties'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('orchestrator'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SLURM'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueLineageSyncEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('isProvisionedSecret'),
                        new \PHPStan\Type\Constant\ConstantStringType('jdbcIamUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('jdbcUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('lineageSync'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftTempDir'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('storage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('usernamePassword'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('password'),
                                new \PHPStan\Type\Constant\ConstantStringType('username'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('lineageJobId'),
                            new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                            new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('computeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentialsExpiration'),
                        new \PHPStan\Type\Constant\ConstantStringType('governanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('javaVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('livyEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('logUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('pythonVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('trustedCertificatesS3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('password'),
                            new \PHPStan\Type\Constant\ConstantStringType('username'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('USER_MANAGED'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('additionalArgs'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('idleTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('javaVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfWorkers'),
                        new \PHPStan\Type\Constant\ConstantStringType('pythonVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('workerType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                    new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                    new \PHPStan\Type\Constant\ConstantStringType('DATABRICKS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                    new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                    new \PHPStan\Type\Constant\ConstantStringType('HYPERPOD'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERADATA'),
                    new \PHPStan\Type\Constant\ConstantStringType('VERTICA'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORKFLOWS_MWAA'),
                ]),
            ]),
        ]);
    }
    private function getDataProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('itemType'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function getDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetFormsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('enableSetting'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunAssetCount'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('publishOnImport'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                new \PHPStan\Type\Constant\ConstantStringType('selfGrantStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('glueRunConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftRunConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('sageMakerRunConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoImportDataQualityResult'),
                        new \PHPStan\Type\Constant\ConstantStringType('catalogName'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataAccessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('relationalFilterConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpressions'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataAccessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftCredentialConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('relationalFilterConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('secretManagerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftClusterSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftServerlessSource'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpressions'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('trackingAssets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enableBusinessNameGeneration'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('timezone'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UTC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFRICA_JOHANNESBURG'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMERICA_MONTREAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMERICA_SAO_PAULO'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_BAHRAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_BANGKOK'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_CALCUTTA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_DUBAI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_HONG_KONG'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_JAKARTA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_KUALA_LUMPUR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SEOUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SHANGHAI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SINGAPORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_TAIPEI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_TOKYO'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUSTRALIA_MELBOURNE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUSTRALIA_SYDNEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANADA_CENTRAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CET'),
                        new \PHPStan\Type\Constant\ConstantStringType('CST6CDT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_10'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_12'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_7'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_9'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_10'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_12'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_14'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_7'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_9'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_DUBLIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_LONDON'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_PARIS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_STOCKHOLM'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_ZURICH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ISRAEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEXICO_GENERAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MST7MDT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PACIFIC_AUCKLAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_CENTRAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_EASTERN'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_MOUNTAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_PACIFIC'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('glueSelfGrantStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftSelfGrantStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selfGrantStatusDetails'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selfGrantStatusDetails'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getDataSourceRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('dataSourceConfigurationSnapshot'),
                new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lineageSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('runStatisticsForAssets'),
                new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('importStatus'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('added'),
                    new \PHPStan\Type\Constant\ConstantStringType('failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    new \PHPStan\Type\Constant\ConstantStringType('unchanged'),
                    new \PHPStan\Type\Constant\ConstantStringType('updated'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIORITIZED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainExecutionRole'),
                new \PHPStan\Type\Constant\ConstantStringType('domainVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('portalUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('rootDomainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                new \PHPStan\Type\Constant\ConstantStringType('singleSignOn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('V1'),
                    new \PHPStan\Type\Constant\ConstantStringType('V2'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('userAssignment'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_IDC'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getDomainUnit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owners'),
                new \PHPStan\Type\Constant\ConstantStringType('parentDomainUnitId'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('group'),
                    new \PHPStan\Type\Constant\ConstantStringType('user'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentActions'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastDeployment'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedResources'),
                new \PHPStan\Type\Constant\ConstantStringType('provisioningProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('userParameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTimeoutMinutes'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('auth'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('isDeploymentComplete'),
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cloudFormation'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('templateUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldType'),
                    new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                    new \PHPStan\Type\Constant\ConstantStringType('isOptional'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getEnvironmentAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsConsoleLink'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getEnvironmentBlueprint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                new \PHPStan\Type\Constant\ConstantStringType('provisioningProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('userParameters'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTimeoutMinutes'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cloudFormation'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('templateUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldType'),
                    new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                    new \PHPStan\Type\Constant\ConstantStringType('isOptional'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getEnvironmentBlueprintConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('enabledRegions'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentRolePermissionBoundary'),
                new \PHPStan\Type\Constant\ConstantStringType('manageAccessRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('provisioningConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('provisioningRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('lakeFormationConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('locationRegistrationExcludeS3Locations'),
                        new \PHPStan\Type\Constant\ConstantStringType('locationRegistrationRole'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getEnvironmentCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('expiration'),
                new \PHPStan\Type\Constant\ConstantStringType('secretAccessKey'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEnvironmentProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('userParameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldType'),
                    new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                    new \PHPStan\Type\Constant\ConstantStringType('isOptional'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getFormType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('imports'),
                new \PHPStan\Type\Constant\ConstantStringType('model'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('originDomainId'),
                new \PHPStan\Type\Constant\ConstantStringType('originProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('smithy'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function getGlossary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getGlossaryTerm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('longDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('termRelations'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('classifies'),
                    new \PHPStan\Type\Constant\ConstantStringType('isA'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getGroupProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSIGNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ASSIGNED'),
                ]),
            ]),
        ]);
    }
    private function getIamPortalLoginUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authCodeUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('userProfileId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getJobRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('details'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                new \PHPStan\Type\Constant\ConstantStringType('runMode'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('lineageRunDetails'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sqlQueryRunDetails'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessages'),
                            new \PHPStan\Type\Constant\ConstantStringType('numQueriesFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('queryEndTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('queryStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('totalQueriesProcessed'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('LINEAGE'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
            ]),
        ]);
    }
    private function getLineageEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('event'),
                new \PHPStan\Type\Constant\ConstantStringType('eventTime'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('processingStatus'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function getLineageNode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('downstreamNodes'),
                new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('upstreamNodes'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getListing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('item'),
                new \PHPStan\Type\Constant\ConstantStringType('listingRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProductListing'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('assetRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('assetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('forms'),
                        new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        new \PHPStan\Type\Constant\ConstantStringType('latestTimeSeriesDataPointForms'),
                        new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentSummary'),
                            new \PHPStan\Type\Constant\ConstantStringType('formName'),
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataProductId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataProductRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('forms'),
                        new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        new \PHPStan\Type\Constant\ConstantStringType('items'),
                        new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            new \PHPStan\Type\Constant\ConstantStringType('listingId'),
                            new \PHPStan\Type\Constant\ConstantStringType('listingRevision'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMetadataGenerationRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('target'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_DESCRIPTIONS'),
            ]),
        ]);
    }
    private function getProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentDeploymentDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('projectStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('userParameters'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentFailureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('overallDeploymentStatus'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]))),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DEPLOYMENT'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function getProjectProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentOrder'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountIdPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('regionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('regionNamePath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('parameterOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolvedParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('ssmPath'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function getRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('action'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('detail'),
                new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('ruleType'),
                new \PHPStan\Type\Constant\ConstantStringType('scope'),
                new \PHPStan\Type\Constant\ConstantStringType('target'),
                new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('CREATE_SUBSCRIPTION_REQUEST'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('metadataFormEnforcementDetail'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('requiredMetadataForms'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('METADATA_FORM_ENFORCEMENT'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProduct'),
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('specificAssetTypes'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('specificProjects'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainUnitTarget'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_UNIT'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('retainPermissions'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedListing'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionRequestId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('item'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                        new \PHPStan\Type\Constant\ConstantStringType('productListing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('forms'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetListings'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSubscriptionGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assets'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('grantedEntity'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionId'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionTargetId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('grantedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('listing'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('GRANT_AND_REVOKE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSubscriptionRequestDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('decisionComment'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('existingSubscriptionId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('metadataForms'),
                new \PHPStan\Type\Constant\ConstantStringType('requestReason'),
                new \PHPStan\Type\Constant\ConstantStringType('reviewerId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedListings'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedPrincipals'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('item'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                        new \PHPStan\Type\Constant\ConstantStringType('productListing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('forms'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetListings'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSubscriptionTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicableAssetTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizedPrincipals'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('manageAccessRole'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionTargetConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTimeSeriesDataPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                new \PHPStan\Type\Constant\ConstantStringType('form'),
                new \PHPStan\Type\Constant\ConstantStringType('formName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                    new \PHPStan\Type\Constant\ConstantStringType('LISTING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getUserProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('details'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('iam'),
                    new \PHPStan\Type\Constant\ConstantStringType('sso'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                        new \PHPStan\Type\Constant\ConstantStringType('username'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSIGNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ASSIGNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSO'),
                ]),
            ]),
        ]);
    }
    private function listAssetFilters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveColumnNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveRowFilter'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssetRevisions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
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
    private function listConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('physicalEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('props'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueConnection'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('stage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('iamConnectionId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('athenaProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticationConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatibleComputeEnvironments'),
                            new \PHPStan\Type\Constant\ConstantStringType('connectionProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('connectionSchemaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastConnectionValidationTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('matchCriteria'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('physicalConnectionRequirements'),
                            new \PHPStan\Type\Constant\ConstantStringType('pythonProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('sparkProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuth2Properties'),
                                new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('authorizationCodeProperties'),
                                    new \PHPStan\Type\Constant\ConstantStringType('oAuth2ClientApplication'),
                                    new \PHPStan\Type\Constant\ConstantStringType('oAuth2Credentials'),
                                    new \PHPStan\Type\Constant\ConstantStringType('oAuth2GrantType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tokenUrl'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tokenUrlParametersMap'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('authorizationCode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('redirectUri'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('aWSManagedClientApplicationReference'),
                                        new \PHPStan\Type\Constant\ConstantStringType('userManagedClientApplicationClientId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('accessToken'),
                                        new \PHPStan\Type\Constant\ConstantStringType('jwtToken'),
                                        new \PHPStan\Type\Constant\ConstantStringType('refreshToken'),
                                        new \PHPStan\Type\Constant\ConstantStringType('userManagedClientApplicationClientSecret'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZATION_CODE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CREDENTIALS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('JWT_BEARER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                                new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                                new \PHPStan\Type\Constant\ConstantStringType('PYTHON'),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                                new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATABRICKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                                new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                                new \PHPStan\Type\Constant\ConstantStringType('HYPERPOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                                new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                                new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                                new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                                new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERADATA'),
                                new \PHPStan\Type\Constant\ConstantStringType('VERTICA'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKFLOWS_MWAA'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroupIdList'),
                                new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('subnetIdList'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('READY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                            new \PHPStan\Type\Constant\ConstantStringType('GLUE_INTERACTIVE_SESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('JDBC'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIVY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ODBC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRISM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('athenaProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('hyperPodProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('sparkEmrProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('sparkGlueProperties'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('READY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                            new \PHPStan\Type\Constant\ConstantStringType('orchestrator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SLURM'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('glueLineageSyncEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('isProvisionedSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('jdbcIamUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('jdbcUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('lineageSync'),
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftTempDir'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('usernamePassword'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('password'),
                                    new \PHPStan\Type\Constant\ConstantStringType('username'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('lineageJobId'),
                                new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('READY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('computeArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsExpiration'),
                            new \PHPStan\Type\Constant\ConstantStringType('governanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceProfileArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('javaVirtualEnv'),
                            new \PHPStan\Type\Constant\ConstantStringType('livyEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('logUri'),
                            new \PHPStan\Type\Constant\ConstantStringType('pythonVirtualEnv'),
                            new \PHPStan\Type\Constant\ConstantStringType('runtimeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('trustedCertificatesS3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('password'),
                                new \PHPStan\Type\Constant\ConstantStringType('username'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('USER_MANAGED'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('additionalArgs'),
                            new \PHPStan\Type\Constant\ConstantStringType('glueConnectionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('glueVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('idleTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('javaVirtualEnv'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfWorkers'),
                            new \PHPStan\Type\Constant\ConstantStringType('pythonVirtualEnv'),
                            new \PHPStan\Type\Constant\ConstantStringType('workerType'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connection'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                        new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATABRICKS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                        new \PHPStan\Type\Constant\ConstantStringType('HYPERPOD'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERADATA'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERTICA'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKFLOWS_MWAA'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataProductRevisions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
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
    private function listDataSourceRunActivities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataAssetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataAssetStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceRunId'),
                    new \PHPStan\Type\Constant\ConstantStringType('database'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('lineageSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('technicalDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('technicalName'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED_CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED_UPDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED_ALREADY_IMPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED_ARCHIVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED_NO_ACCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNCHANGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataSourceRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lineageSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('runStatisticsForAssets'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('importStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('added'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                        new \PHPStan\Type\Constant\ConstantStringType('unchanged'),
                        new \PHPStan\Type\Constant\ConstantStringType('updated'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRIORITIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableSetting'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRunAssetCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRunAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRunErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRunStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                        new \PHPStan\Type\Constant\ConstantStringType('timezone'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UTC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFRICA_JOHANNESBURG'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMERICA_MONTREAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMERICA_SAO_PAULO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_BAHRAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_BANGKOK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_CALCUTTA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_DUBAI'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_HONG_KONG'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_JAKARTA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_KUALA_LUMPUR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_SEOUL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_SHANGHAI'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_SINGAPORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_TAIPEI'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASIA_TOKYO'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUSTRALIA_MELBOURNE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUSTRALIA_SYDNEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANADA_CENTRAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CET'),
                            new \PHPStan\Type\Constant\ConstantStringType('CST6CDT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT0'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_0'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_10'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_11'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_12'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_3'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_5'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_6'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_7'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_8'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_9'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_0'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_10'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_11'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_12'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_13'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_14'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_3'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_5'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_6'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_7'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_8'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_9'),
                            new \PHPStan\Type\Constant\ConstantStringType('EUROPE_DUBLIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('EUROPE_LONDON'),
                            new \PHPStan\Type\Constant\ConstantStringType('EUROPE_PARIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EUROPE_STOCKHOLM'),
                            new \PHPStan\Type\Constant\ConstantStringType('EUROPE_ZURICH'),
                            new \PHPStan\Type\Constant\ConstantStringType('ISRAEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEXICO_GENERAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MST7MDT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PACIFIC_AUCKLAND'),
                            new \PHPStan\Type\Constant\ConstantStringType('US_CENTRAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('US_EASTERN'),
                            new \PHPStan\Type\Constant\ConstantStringType('US_MOUNTAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('US_PACIFIC'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDomainUnitsForParent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDomains(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('managedAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('V1'),
                        new \PHPStan\Type\Constant\ConstantStringType('V2'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEntityOwners(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('owners'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('group'),
                    new \PHPStan\Type\Constant\ConstantStringType('user'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listEnvironmentActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsConsoleLink'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEnvironmentBlueprintConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('enabledRegions'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentRolePermissionBoundary'),
                    new \PHPStan\Type\Constant\ConstantStringType('manageAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('regionalParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lakeFormationConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('locationRegistrationExcludeS3Locations'),
                            new \PHPStan\Type\Constant\ConstantStringType('locationRegistrationRole'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEnvironmentBlueprints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudFormation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('templateUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEnvironmentProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function listEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
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
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('runId'),
                    new \PHPStan\Type\Constant\ConstantStringType('runMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('LINEAGE'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLineageEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('processingStatus'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('openLineageRunEventSummary'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                            new \PHPStan\Type\Constant\ConstantStringType('inputs'),
                            new \PHPStan\Type\Constant\ConstantStringType('job'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('START'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABORT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLineageNodeHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('nodes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listMetadataGenerationRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('revision'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_DESCRIPTIONS'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNotifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('notifications'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('topic'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('role'),
                        new \PHPStan\Type\Constant\ConstantStringType('subject'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECT_OWNER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECT_CONTRIBUTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECT_VIEWER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_OWNER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROJECT_SUBSCRIBER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPolicyGrants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('grantList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                    new \PHPStan\Type\Constant\ConstantStringType('principal'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('addToProjectMemberPool'),
                        new \PHPStan\Type\Constant\ConstantStringType('createAssetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('createDomainUnit'),
                        new \PHPStan\Type\Constant\ConstantStringType('createEnvironment'),
                        new \PHPStan\Type\Constant\ConstantStringType('createEnvironmentFromBlueprint'),
                        new \PHPStan\Type\Constant\ConstantStringType('createEnvironmentProfile'),
                        new \PHPStan\Type\Constant\ConstantStringType('createFormType'),
                        new \PHPStan\Type\Constant\ConstantStringType('createGlossary'),
                        new \PHPStan\Type\Constant\ConstantStringType('createProject'),
                        new \PHPStan\Type\Constant\ConstantStringType('createProjectFromProjectProfile'),
                        new \PHPStan\Type\Constant\ConstantStringType('delegateCreateEnvironmentProfile'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideDomainUnitOwners'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideProjectOwners'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('projectProfiles'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainUnit'),
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('project'),
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domainUnitDesignation'),
                            new \PHPStan\Type\Constant\ConstantStringType('domainUnitGrantFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('domainUnitIdentifier'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('OWNER'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allDomainUnitsGrantFilter'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('projectDesignation'),
                            new \PHPStan\Type\Constant\ConstantStringType('projectGrantFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('projectIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OWNER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTRIBUTOR'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROJECT_CATALOG_STEWARD'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('domainUnitFilter'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('domainUnit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('allUsersGrantFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('userIdentifier'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProjectMemberships(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('members'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('designation'),
                    new \PHPStan\Type\Constant\ConstantStringType('memberDetails'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROJECT_OWNER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROJECT_CONTRIBUTOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROJECT_CATALOG_VIEWER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROJECT_CATALOG_CONSUMER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROJECT_CATALOG_STEWARD'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('group'),
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('userId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProjectProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleType'),
                    new \PHPStan\Type\Constant\ConstantStringType('scope'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_SUBSCRIPTION_REQUEST'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('METADATA_FORM_ENFORCEMENT'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataProduct'),
                        new \PHPStan\Type\Constant\ConstantStringType('project'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('specificAssetTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('specificProjects'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainUnitTarget'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                            new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_UNIT'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSubscriptionGrants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assets'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('grantedEntity'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriptionTargetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('assetRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('grantedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GRANT_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVOKE_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRANT_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVOKE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('listing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('revision'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_AND_REVOKE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSubscriptionRequests(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('decisionComment'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('existingSubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadataFormsSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('reviewerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscribedListings'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscribedPrincipals'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('formName'),
                        new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('item'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerProjectId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerProjectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                            new \PHPStan\Type\Constant\ConstantStringType('productListing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                                new \PHPStan\Type\Constant\ConstantStringType('forms'),
                                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetListings'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('project'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSubscriptionTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('applicableAssetTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizedPrincipals'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('manageAccessRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriptionTargetConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('retainPermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscribedListing'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscribedPrincipal'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriptionRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('item'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerProjectId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerProjectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                            new \PHPStan\Type\Constant\ConstantStringType('productListing'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                                new \PHPStan\Type\Constant\ConstantStringType('forms'),
                                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetListings'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('project'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listTimeSeriesDataPoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contentSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
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
    private function postLineageEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function postTimeSeriesDataPoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                new \PHPStan\Type\Constant\ConstantStringType('forms'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                    new \PHPStan\Type\Constant\ConstantStringType('LISTING'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function putEnvironmentBlueprintConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('enabledRegions'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentRolePermissionBoundary'),
                new \PHPStan\Type\Constant\ConstantStringType('manageAccessRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('provisioningConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('provisioningRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('lakeFormationConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('locationRegistrationExcludeS3Locations'),
                        new \PHPStan\Type\Constant\ConstantStringType('locationRegistrationRole'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function rejectPredictions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                new \PHPStan\Type\Constant\ConstantStringType('assetRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rejectSubscriptionRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('decisionComment'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('existingSubscriptionId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('metadataForms'),
                new \PHPStan\Type\Constant\ConstantStringType('requestReason'),
                new \PHPStan\Type\Constant\ConstantStringType('reviewerId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedListings'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedPrincipals'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('item'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                        new \PHPStan\Type\Constant\ConstantStringType('productListing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('forms'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetListings'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeEntityOwner(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removePolicyGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function revokeSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('retainPermissions'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedListing'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionRequestId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('item'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                        new \PHPStan\Type\Constant\ConstantStringType('productListing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('forms'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetListings'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function search(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('totalMatchCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetItem'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProductItem'),
                    new \PHPStan\Type\Constant\ConstantStringType('glossaryItem'),
                    new \PHPStan\Type\Constant\ConstantStringType('glossaryTermItem'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('additionalAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                        new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                            new \PHPStan\Type\Constant\ConstantStringType('latestTimeSeriesDataPointFormsOutput'),
                            new \PHPStan\Type\Constant\ConstantStringType('readOnlyFormsOutput'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('formName'),
                                new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentSummary'),
                                new \PHPStan\Type\Constant\ConstantStringType('formName'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('formName'),
                                new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstRevisionCreatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                        new \PHPStan\Type\Constant\ConstantStringType('glossaryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('longDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('termRelations'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('classifies'),
                            new \PHPStan\Type\Constant\ConstantStringType('isA'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchGroupProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASSIGNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_ASSIGNED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchListings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('totalMatchCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProductListing'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('additionalAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                        new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        new \PHPStan\Type\Constant\ConstantStringType('listingCreatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('listingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('listingRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('listingUpdatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('forms'),
                            new \PHPStan\Type\Constant\ConstantStringType('latestTimeSeriesDataPointForms'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentSummary'),
                                new \PHPStan\Type\Constant\ConstantStringType('formName'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
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
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('additionalAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        new \PHPStan\Type\Constant\ConstantStringType('items'),
                        new \PHPStan\Type\Constant\ConstantStringType('listingCreatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('listingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('listingRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('listingUpdatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('forms'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            new \PHPStan\Type\Constant\ConstantStringType('listingId'),
                            new \PHPStan\Type\Constant\ConstantStringType('listingRevision'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('totalMatchCount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetTypeItem'),
                    new \PHPStan\Type\Constant\ConstantStringType('formTypeItem'),
                    new \PHPStan\Type\Constant\ConstantStringType('lineageNodeTypeItem'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                        new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('originDomainId'),
                        new \PHPStan\Type\Constant\ConstantStringType('originProjectId'),
                        new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                        new \PHPStan\Type\Constant\ConstantStringType('revision'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                            new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                        new \PHPStan\Type\Constant\ConstantStringType('imports'),
                        new \PHPStan\Type\Constant\ConstantStringType('model'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('originDomainId'),
                        new \PHPStan\Type\Constant\ConstantStringType('originProjectId'),
                        new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                        new \PHPStan\Type\Constant\ConstantStringType('revision'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('revision'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('smithy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                        new \PHPStan\Type\Constant\ConstantStringType('formsOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('revision'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                            new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function searchUserProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('details'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('iam'),
                        new \PHPStan\Type\Constant\ConstantStringType('sso'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                            new \PHPStan\Type\Constant\ConstantStringType('username'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASSIGNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_ASSIGNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSO'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDataSourceRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('dataSourceConfigurationSnapshot'),
                new \PHPStan\Type\Constant\ConstantStringType('dataSourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('runStatisticsForAssets'),
                new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('added'),
                    new \PHPStan\Type\Constant\ConstantStringType('failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                    new \PHPStan\Type\Constant\ConstantStringType('unchanged'),
                    new \PHPStan\Type\Constant\ConstantStringType('updated'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIORITIZED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function startMetadataGenerationRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('BUSINESS_DESCRIPTIONS'),
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
    private function updateAssetFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('effectiveColumnNames'),
                new \PHPStan\Type\Constant\ConstantStringType('effectiveRowFilter'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('columnConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('rowConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('includedColumnNames'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rowFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('sensitive'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('and'),
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('or'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('equalTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('greaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('greaterThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('in'),
                                new \PHPStan\Type\Constant\ConstantStringType('isNotNull'),
                                new \PHPStan\Type\Constant\ConstantStringType('isNull'),
                                new \PHPStan\Type\Constant\ConstantStringType('lessThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('lessThanOrEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('like'),
                                new \PHPStan\Type\Constant\ConstantStringType('notEqualTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('notIn'),
                                new \PHPStan\Type\Constant\ConstantStringType('notLike'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                ]),
            ]),
        ]);
    }
    private function updateConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('physicalEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('props'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('glueConnection'),
                    new \PHPStan\Type\Constant\ConstantStringType('glueConnectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('host'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('stage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamConnectionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('athenaProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatibleComputeEnvironments'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionSchemaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastConnectionValidationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('matchCriteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('physicalConnectionRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('pythonProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('sparkProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('oAuth2Properties'),
                            new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH2'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authorizationCodeProperties'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuth2ClientApplication'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuth2Credentials'),
                                new \PHPStan\Type\Constant\ConstantStringType('oAuth2GrantType'),
                                new \PHPStan\Type\Constant\ConstantStringType('tokenUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('tokenUrlParametersMap'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('authorizationCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirectUri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('aWSManagedClientApplicationReference'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userManagedClientApplicationClientId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accessToken'),
                                    new \PHPStan\Type\Constant\ConstantStringType('jwtToken'),
                                    new \PHPStan\Type\Constant\ConstantStringType('refreshToken'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userManagedClientApplicationClientSecret'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZATION_CODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLIENT_CREDENTIALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JWT_BEARER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                            new \PHPStan\Type\Constant\ConstantStringType('PYTHON'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATABRICKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                            new \PHPStan\Type\Constant\ConstantStringType('HYPERPOD'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERADATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('VERTICA'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORKFLOWS_MWAA'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroupIdList'),
                            new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('subnetIdList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLUE_INTERACTIVE_SESSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('JDBC'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIVY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ODBC'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRISM'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('athenaProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('glueProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('hyperPodProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sparkEmrProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sparkGlueProperties'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('orchestrator'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SLURM'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueLineageSyncEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('isProvisionedSecret'),
                        new \PHPStan\Type\Constant\ConstantStringType('jdbcIamUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('jdbcUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('lineageSync'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftTempDir'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('storage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('usernamePassword'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('password'),
                                new \PHPStan\Type\Constant\ConstantStringType('username'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('lineageJobId'),
                            new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                            new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('computeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentialsExpiration'),
                        new \PHPStan\Type\Constant\ConstantStringType('governanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('javaVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('livyEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('logUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('pythonVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('trustedCertificatesS3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('password'),
                            new \PHPStan\Type\Constant\ConstantStringType('username'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('USER_MANAGED'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('additionalArgs'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('glueVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('idleTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('javaVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfWorkers'),
                        new \PHPStan\Type\Constant\ConstantStringType('pythonVirtualEnv'),
                        new \PHPStan\Type\Constant\ConstantStringType('workerType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                    new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                    new \PHPStan\Type\Constant\ConstantStringType('DATABRICKS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                    new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                    new \PHPStan\Type\Constant\ConstantStringType('HYPERPOD'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SPARK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERADATA'),
                    new \PHPStan\Type\Constant\ConstantStringType('VERTICA'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORKFLOWS_MWAA'),
                ]),
            ]),
        ]);
    }
    private function updateDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assetFormsOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('enableSetting'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('lastRunStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('publishOnImport'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                new \PHPStan\Type\Constant\ConstantStringType('retainPermissionsOnRevokeFailure'),
                new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                new \PHPStan\Type\Constant\ConstantStringType('selfGrantStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('glueRunConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftRunConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('sageMakerRunConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoImportDataQualityResult'),
                        new \PHPStan\Type\Constant\ConstantStringType('catalogName'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataAccessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('relationalFilterConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpressions'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataAccessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftCredentialConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('redshiftStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('relationalFilterConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('secretManagerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftClusterSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('redshiftServerlessSource'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workgroupName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterExpressions'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUDE'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('trackingAssets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enableBusinessNameGeneration'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('timezone'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UTC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFRICA_JOHANNESBURG'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMERICA_MONTREAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMERICA_SAO_PAULO'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_BAHRAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_BANGKOK'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_CALCUTTA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_DUBAI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_HONG_KONG'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_JAKARTA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_KUALA_LUMPUR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SEOUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SHANGHAI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_SINGAPORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_TAIPEI'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASIA_TOKYO'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUSTRALIA_MELBOURNE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUSTRALIA_SYDNEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANADA_CENTRAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CET'),
                        new \PHPStan\Type\Constant\ConstantStringType('CST6CDT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_10'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_12'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_7'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_ADD_9'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_10'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_12'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_14'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_5'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_7'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETC_GMT_NEG_9'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_DUBLIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_LONDON'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_PARIS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_STOCKHOLM'),
                        new \PHPStan\Type\Constant\ConstantStringType('EUROPE_ZURICH'),
                        new \PHPStan\Type\Constant\ConstantStringType('ISRAEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEXICO_GENERAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MST7MDT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PACIFIC_AUCKLAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_CENTRAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_EASTERN'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_MOUNTAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_PACIFIC'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('glueSelfGrantStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('redshiftSelfGrantStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selfGrantStatusDetails'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selfGrantStatusDetails'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                            new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainExecutionRole'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('rootDomainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                new \PHPStan\Type\Constant\ConstantStringType('singleSignOn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('userAssignment'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_IDC'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateDomainUnit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owners'),
                new \PHPStan\Type\Constant\ConstantStringType('parentDomainUnitId'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('group'),
                    new \PHPStan\Type\Constant\ConstantStringType('user'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentActions'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastDeployment'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedResources'),
                new \PHPStan\Type\Constant\ConstantStringType('provisioningProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('userParameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endTimeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTimeoutMinutes'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('auth'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('isDeploymentComplete'),
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cloudFormation'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('templateUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldType'),
                    new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                    new \PHPStan\Type\Constant\ConstantStringType('isOptional'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateEnvironmentAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsConsoleLink'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateEnvironmentProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('userParameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldType'),
                    new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                    new \PHPStan\Type\Constant\ConstantStringType('isOptional'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateGlossary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('owningProjectId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                ]),
            ]),
        ]);
    }
    private function updateGlossaryTerm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('longDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('termRelations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('classifies'),
                    new \PHPStan\Type\Constant\ConstantStringType('isA'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateGroupProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSIGNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ASSIGNED'),
                ]),
            ]),
        ]);
    }
    private function updateProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentDeploymentDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReasons'),
                new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('projectStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('userParameters'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentFailureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('overallDeploymentStatus'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]))),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DEPLOYMENT'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function updateProjectProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentOrder'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentBlueprintId'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountIdPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('regionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('regionNamePath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('parameterOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolvedParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('ssmPath'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('isEditable'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function updateRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('action'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('detail'),
                new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('ruleType'),
                new \PHPStan\Type\Constant\ConstantStringType('scope'),
                new \PHPStan\Type\Constant\ConstantStringType('target'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('CREATE_SUBSCRIPTION_REQUEST'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('metadataFormEnforcementDetail'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('requiredMetadataForms'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('typeIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('METADATA_FORM_ENFORCEMENT'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProduct'),
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('specificAssetTypes'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('specificProjects'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainUnitTarget'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainUnitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('includeChildDomainUnits'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateSubscriptionGrantStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assets'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('grantedEntity'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionId'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionTargetId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureCause'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('grantedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('listing'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('GRANT_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVOKE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('GRANT_AND_REVOKE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACCESSIBLE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSubscriptionRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('decisionComment'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('existingSubscriptionId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('metadataForms'),
                new \PHPStan\Type\Constant\ConstantStringType('requestReason'),
                new \PHPStan\Type\Constant\ConstantStringType('reviewerId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedListings'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribedPrincipals'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('item'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerProjectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetListing'),
                        new \PHPStan\Type\Constant\ConstantStringType('productListing'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetScope'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('forms'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('filterIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assetListings'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                            new \PHPStan\Type\Constant\ConstantStringType('glossaryTerms'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('shortDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('project'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSubscriptionTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicableAssetTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizedPrincipals'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('manageAccessRole'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('projectId'),
                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionTargetConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('formName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateUserProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('details'),
                new \PHPStan\Type\Constant\ConstantStringType('domainId'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('iam'),
                    new \PHPStan\Type\Constant\ConstantStringType('sso'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                        new \PHPStan\Type\Constant\ConstantStringType('username'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSIGNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ASSIGNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSO'),
                ]),
            ]),
        ]);
    }
}