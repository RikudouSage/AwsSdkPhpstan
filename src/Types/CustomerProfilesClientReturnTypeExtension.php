<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CustomerProfilesClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CustomerProfiles\CustomerProfilesClient>
     */
    public function getClass(): string
    {
        return \Aws\CustomerProfiles\CustomerProfilesClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addProfileKey',
            'batchGetCalculatedAttributeForProfile',
            'batchGetProfile',
            'createCalculatedAttributeDefinition',
            'createDomain',
            'createEventStream',
            'createEventTrigger',
            'createIntegrationWorkflow',
            'createProfile',
            'createSegmentDefinition',
            'createSegmentEstimate',
            'createSegmentSnapshot',
            'deleteCalculatedAttributeDefinition',
            'deleteDomain',
            'deleteEventStream',
            'deleteEventTrigger',
            'deleteIntegration',
            'deleteProfile',
            'deleteProfileKey',
            'deleteProfileObject',
            'deleteProfileObjectType',
            'deleteSegmentDefinition',
            'deleteWorkflow',
            'detectProfileObjectType',
            'getAutoMergingPreview',
            'getCalculatedAttributeDefinition',
            'getCalculatedAttributeForProfile',
            'getDomain',
            'getEventStream',
            'getEventTrigger',
            'getIdentityResolutionJob',
            'getIntegration',
            'getMatches',
            'getProfileObjectType',
            'getProfileObjectTypeTemplate',
            'getSegmentDefinition',
            'getSegmentEstimate',
            'getSegmentMembership',
            'getSegmentSnapshot',
            'getSimilarProfiles',
            'getWorkflow',
            'getWorkflowSteps',
            'listAccountIntegrations',
            'listCalculatedAttributeDefinitions',
            'listCalculatedAttributesForProfile',
            'listDomains',
            'listEventStreams',
            'listEventTriggers',
            'listIdentityResolutionJobs',
            'listIntegrations',
            'listObjectTypeAttributes',
            'listProfileAttributeValues',
            'listProfileObjectTypeTemplates',
            'listProfileObjectTypes',
            'listProfileObjects',
            'listRuleBasedMatches',
            'listSegmentDefinitions',
            'listTagsForResource',
            'listWorkflows',
            'mergeProfiles',
            'putIntegration',
            'putProfileObject',
            'putProfileObjectType',
            'searchProfiles',
            'tagResource',
            'untagResource',
            'updateCalculatedAttributeDefinition',
            'updateDomain',
            'updateEventTrigger',
            'updateProfile',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addProfileKey' => $this->addProfileKey(),
            'batchGetCalculatedAttributeForProfile' => $this->batchGetCalculatedAttributeForProfile(),
            'batchGetProfile' => $this->batchGetProfile(),
            'createCalculatedAttributeDefinition' => $this->createCalculatedAttributeDefinition(),
            'createDomain' => $this->createDomain(),
            'createEventStream' => $this->createEventStream(),
            'createEventTrigger' => $this->createEventTrigger(),
            'createIntegrationWorkflow' => $this->createIntegrationWorkflow(),
            'createProfile' => $this->createProfile(),
            'createSegmentDefinition' => $this->createSegmentDefinition(),
            'createSegmentEstimate' => $this->createSegmentEstimate(),
            'createSegmentSnapshot' => $this->createSegmentSnapshot(),
            'deleteCalculatedAttributeDefinition' => $this->deleteCalculatedAttributeDefinition(),
            'deleteDomain' => $this->deleteDomain(),
            'deleteEventStream' => $this->deleteEventStream(),
            'deleteEventTrigger' => $this->deleteEventTrigger(),
            'deleteIntegration' => $this->deleteIntegration(),
            'deleteProfile' => $this->deleteProfile(),
            'deleteProfileKey' => $this->deleteProfileKey(),
            'deleteProfileObject' => $this->deleteProfileObject(),
            'deleteProfileObjectType' => $this->deleteProfileObjectType(),
            'deleteSegmentDefinition' => $this->deleteSegmentDefinition(),
            'deleteWorkflow' => $this->deleteWorkflow(),
            'detectProfileObjectType' => $this->detectProfileObjectType(),
            'getAutoMergingPreview' => $this->getAutoMergingPreview(),
            'getCalculatedAttributeDefinition' => $this->getCalculatedAttributeDefinition(),
            'getCalculatedAttributeForProfile' => $this->getCalculatedAttributeForProfile(),
            'getDomain' => $this->getDomain(),
            'getEventStream' => $this->getEventStream(),
            'getEventTrigger' => $this->getEventTrigger(),
            'getIdentityResolutionJob' => $this->getIdentityResolutionJob(),
            'getIntegration' => $this->getIntegration(),
            'getMatches' => $this->getMatches(),
            'getProfileObjectType' => $this->getProfileObjectType(),
            'getProfileObjectTypeTemplate' => $this->getProfileObjectTypeTemplate(),
            'getSegmentDefinition' => $this->getSegmentDefinition(),
            'getSegmentEstimate' => $this->getSegmentEstimate(),
            'getSegmentMembership' => $this->getSegmentMembership(),
            'getSegmentSnapshot' => $this->getSegmentSnapshot(),
            'getSimilarProfiles' => $this->getSimilarProfiles(),
            'getWorkflow' => $this->getWorkflow(),
            'getWorkflowSteps' => $this->getWorkflowSteps(),
            'listAccountIntegrations' => $this->listAccountIntegrations(),
            'listCalculatedAttributeDefinitions' => $this->listCalculatedAttributeDefinitions(),
            'listCalculatedAttributesForProfile' => $this->listCalculatedAttributesForProfile(),
            'listDomains' => $this->listDomains(),
            'listEventStreams' => $this->listEventStreams(),
            'listEventTriggers' => $this->listEventTriggers(),
            'listIdentityResolutionJobs' => $this->listIdentityResolutionJobs(),
            'listIntegrations' => $this->listIntegrations(),
            'listObjectTypeAttributes' => $this->listObjectTypeAttributes(),
            'listProfileAttributeValues' => $this->listProfileAttributeValues(),
            'listProfileObjectTypeTemplates' => $this->listProfileObjectTypeTemplates(),
            'listProfileObjectTypes' => $this->listProfileObjectTypes(),
            'listProfileObjects' => $this->listProfileObjects(),
            'listRuleBasedMatches' => $this->listRuleBasedMatches(),
            'listSegmentDefinitions' => $this->listSegmentDefinitions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWorkflows' => $this->listWorkflows(),
            'mergeProfiles' => $this->mergeProfiles(),
            'putIntegration' => $this->putIntegration(),
            'putProfileObject' => $this->putProfileObject(),
            'putProfileObjectType' => $this->putProfileObjectType(),
            'searchProfiles' => $this->searchProfiles(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCalculatedAttributeDefinition' => $this->updateCalculatedAttributeDefinition(),
            'updateDomain' => $this->updateDomain(),
            'updateEventTrigger' => $this->updateEventTrigger(),
            'updateProfile' => $this->updateProfile(),
        };
    }
    private function addProfileKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                new \PHPStan\Type\Constant\ConstantStringType('Values'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchGetCalculatedAttributeForProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('CalculatedAttributeValues'),
                new \PHPStan\Type\Constant\ConstantStringType('ConditionOverrides'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CalculatedAttributeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDataPartial'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Range'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Start'),
                        new \PHPStan\Type\Constant\ConstantStringType('End'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function batchGetProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('BusinessName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirstName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MiddleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BirthDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobilePhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomePhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('BusinessPhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('PersonalEmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('BusinessEmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShippingAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('MailingAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('BillingAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('FoundByItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartyTypeString'),
                    new \PHPStan\Type\Constant\ConstantStringType('GenderString'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INDIVIDUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSINESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MALE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FEMALE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('County'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Province'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('County'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Province'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('County'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Province'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('County'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Province'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createCalculatedAttributeDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CalculatedAttributeName'),
                new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('AttributeDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('Conditions'),
                new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Range'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Include'),
                    new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_BETWEEN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ON'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUAL'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FIRST_OCCURRENCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAST_OCCURRENCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('MINIMUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVERAGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAX_OCCURRENCE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultExpirationDays'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultEncryptionKey'),
                new \PHPStan\Type\Constant\ConstantStringType('DeadLetterQueueUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Matching'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleBasedMatching'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMerging'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportingConfig'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DayOfTheWeek'),
                        new \PHPStan\Type\Constant\ConstantStringType('Time'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Consolidation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConflictResolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinAllowedConfidenceScoreForMerging'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MatchingAttributesList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConflictResolvingModel'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RECENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Exporting'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3KeyName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchingRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAllowedRuleLevelForMerging'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAllowedRuleLevelForMatching'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeTypesSelector'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConflictResolution'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportingConfig'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConflictResolvingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RECENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Exporting'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3KeyName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createEventStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventStreamArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createEventTrigger(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventTriggerName'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EventTriggerConditions'),
                new \PHPStan\Type\Constant\ConstantStringType('SegmentFilter'),
                new \PHPStan\Type\Constant\ConstantStringType('EventTriggerLimits'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventTriggerDimensions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalOperator'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectAttributes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ON'),
                                new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_BETWEEN'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Periods'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxInvocationsPerProfile'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unlimited'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createIntegrationWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSegmentDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SegmentDefinitionName'),
                new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('SegmentDefinitionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createSegmentEstimate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimateId'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createSegmentSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteCalculatedAttributeDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteEventStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEventTrigger(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteProfileKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteProfileObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteProfileObjectType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteSegmentDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function detectProfileObjectType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DetectedProfileObjectTypes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLastUpdatedTimestampFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                    new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StandardIdentifiers'),
                        new \PHPStan\Type\Constant\ConstantStringType('FieldNames'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROFILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                            new \PHPStan\Type\Constant\ConstantStringType('CASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMMUNICATION_RECORD'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNIQUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECONDARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOOKUP_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_ONLY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getAutoMergingPreview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfMatchesInSample'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfProfilesInSample'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfProfilesWillBeMerged'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getCalculatedAttributeDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CalculatedAttributeName'),
                new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                new \PHPStan\Type\Constant\ConstantStringType('Conditions'),
                new \PHPStan\Type\Constant\ConstantStringType('AttributeDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FIRST_OCCURRENCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAST_OCCURRENCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('MINIMUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVERAGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAX_OCCURRENCE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Include'),
                    new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_BETWEEN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ON'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUAL'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Range'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getCalculatedAttributeForProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CalculatedAttributeName'),
                new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('IsDataPartial'),
                new \PHPStan\Type\Constant\ConstantStringType('Value'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultExpirationDays'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultEncryptionKey'),
                new \PHPStan\Type\Constant\ConstantStringType('DeadLetterQueueUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Stats'),
                new \PHPStan\Type\Constant\ConstantStringType('Matching'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleBasedMatching'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('MeteringProfileCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalSize'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMerging'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportingConfig'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DayOfTheWeek'),
                        new \PHPStan\Type\Constant\ConstantStringType('Time'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Consolidation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConflictResolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinAllowedConfidenceScoreForMerging'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MatchingAttributesList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConflictResolvingModel'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RECENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Exporting'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3KeyName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchingRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAllowedRuleLevelForMerging'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAllowedRuleLevelForMatching'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeTypesSelector'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConflictResolution'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportingConfig'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConflictResolvingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RECENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Exporting'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3KeyName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getEventStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('EventStreamArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('StoppedSince'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnhealthySince'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getEventTrigger(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventTriggerName'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EventTriggerConditions'),
                new \PHPStan\Type\Constant\ConstantStringType('SegmentFilter'),
                new \PHPStan\Type\Constant\ConstantStringType('EventTriggerLimits'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventTriggerDimensions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalOperator'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectAttributes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ON'),
                                new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_BETWEEN'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Periods'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxInvocationsPerProfile'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unlimited'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getIdentityResolutionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('JobEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('JobExpirationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoMerging'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportingLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStats'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PREPROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIND_MATCHING'),
                    new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Consolidation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConflictResolution'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinAllowedConfidenceScoreForMerging'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MatchingAttributesList'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConflictResolvingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RECENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Exporting'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3KeyName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfProfilesReviewed'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfMatchesFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfMergesDone'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeNames'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                new \PHPStan\Type\Constant\ConstantStringType('IsUnstructured'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EventTriggerNames'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMatches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('MatchGenerationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('PotentialMatches'),
                new \PHPStan\Type\Constant\ConstantStringType('Matches'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MatchId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfidenceScore'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function getProfileObjectType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpirationDays'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKey'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowProfileCreation'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLastUpdatedTimestampFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxAvailableProfileObjectCount'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxProfileObjectCount'),
                new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldNames'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROFILE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMMUNICATION_RECORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNIQUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECONDARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOOKUP_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEW_ONLY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getProfileObjectTypeTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceObject'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowProfileCreation'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLastUpdatedTimestampFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                new \PHPStan\Type\Constant\ConstantStringType('Keys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldNames'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROFILE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMMUNICATION_RECORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNIQUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECONDARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOOKUP_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEW_ONLY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getSegmentDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SegmentDefinitionName'),
                new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('SegmentGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('SegmentDefinitionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                    new \PHPStan\Type\Constant\ConstantStringType('Include'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceSegments'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ProfileAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('CalculatedAttributes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccountNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('AdditionalInformation'),
                                new \PHPStan\Type\Constant\ConstantStringType('FirstName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastName'),
                                new \PHPStan\Type\Constant\ConstantStringType('MiddleName'),
                                new \PHPStan\Type\Constant\ConstantStringType('GenderString'),
                                new \PHPStan\Type\Constant\ConstantStringType('PartyTypeString'),
                                new \PHPStan\Type\Constant\ConstantStringType('BirthDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('BusinessName'),
                                new \PHPStan\Type\Constant\ConstantStringType('BusinessPhoneNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('HomePhoneNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('MobilePhoneNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PersonalEmailAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('BusinessEmailAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('ShippingAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('MailingAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('BillingAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NOT_BETWEEN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ON'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                    new \PHPStan\Type\Constant\ConstantStringType('County'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Province'),
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                    new \PHPStan\Type\Constant\ConstantStringType('County'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Province'),
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                    new \PHPStan\Type\Constant\ConstantStringType('County'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Province'),
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                    new \PHPStan\Type\Constant\ConstantStringType('County'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Province'),
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NOT_BETWEEN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ON'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EQUAL'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DimensionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConditionOverrides'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_BETWEEN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ON'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUAL'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Range'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Start'),
                                        new \PHPStan\Type\Constant\ConstantStringType('End'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentDefinitionName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getSegmentEstimate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimateId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Estimate'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getSegmentMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SegmentDefinitionName'),
                new \PHPStan\Type\Constant\ConstantStringType('Profiles'),
                new \PHPStan\Type\Constant\ConstantStringType('Failures'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profile'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRESENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABSENT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalInformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('PartyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('BusinessName'),
                        new \PHPStan\Type\Constant\ConstantStringType('FirstName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MiddleName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastName'),
                        new \PHPStan\Type\Constant\ConstantStringType('BirthDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('MobilePhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('HomePhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('BusinessPhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('PersonalEmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('BusinessEmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShippingAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('MailingAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('BillingAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('FoundByItems'),
                        new \PHPStan\Type\Constant\ConstantStringType('PartyTypeString'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenderString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INDIVIDUAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSINESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MALE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FEMALE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                            new \PHPStan\Type\Constant\ConstantStringType('City'),
                            new \PHPStan\Type\Constant\ConstantStringType('County'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('Province'),
                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                            new \PHPStan\Type\Constant\ConstantStringType('City'),
                            new \PHPStan\Type\Constant\ConstantStringType('County'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('Province'),
                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                            new \PHPStan\Type\Constant\ConstantStringType('City'),
                            new \PHPStan\Type\Constant\ConstantStringType('County'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('Province'),
                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                            new \PHPStan\Type\Constant\ConstantStringType('City'),
                            new \PHPStan\Type\Constant\ConstantStringType('County'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('Province'),
                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getSegmentSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('DataFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKey'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationUri'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    new \PHPStan\Type\Constant\ConstantStringType('JSONL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORC'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSimilarProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileIds'),
                new \PHPStan\Type\Constant\ConstantStringType('MatchId'),
                new \PHPStan\Type\Constant\ConstantStringType('MatchType'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleLevel'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfidenceScore'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RULE_BASED_MATCHING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ML_BASED_MATCHING'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkflowType'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('APPFLOW_INTEGRATION'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SPLIT'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppflowIntegration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceConnectorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectorProfileName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Salesforce'),
                            new \PHPStan\Type\Constant\ConstantStringType('Marketo'),
                            new \PHPStan\Type\Constant\ConstantStringType('Zendesk'),
                            new \PHPStan\Type\Constant\ConstantStringType('Servicenow'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppflowIntegration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecordsProcessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('StepsCompleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalSteps'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getWorkflowSteps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkflowType'),
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('APPFLOW_INTEGRATION'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppflowIntegration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlowName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecordsProcessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('BatchRecordsStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('BatchRecordsEndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPLIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccountIntegrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsUnstructured'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventTriggerNames'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCalculatedAttributeDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CalculatedAttributeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCalculatedAttributesForProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CalculatedAttributeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDataPartial'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDomains(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEventStreams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventStreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventStreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StoppedSince'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnhealthySince'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEventTriggers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventTriggerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIdentityResolutionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityResolutionJobsList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStats'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportingLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FIND_MATCHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfProfilesReviewed'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfMatchesFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfMergesDone'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Exporting'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3KeyName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIntegrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsUnstructured'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventTriggerNames'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listObjectTypeAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProfileAttributeValues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listProfileObjectTypeTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceObject'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProfileObjectTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxProfileObjectCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAvailableProfileObjectCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProfileObjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileObjectUniqueKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('Object'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRuleBasedMatches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MatchIds'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSegmentDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDefinitionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDefinitionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
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
    private function listWorkflows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WorkflowType'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('APPFLOW_INTEGRATION'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function mergeProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeNames'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkflowId'),
                new \PHPStan\Type\Constant\ConstantStringType('IsUnstructured'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EventTriggerNames'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putProfileObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileObjectUniqueKey'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putProfileObjectType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpirationDays'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKey'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowProfileCreation'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLastUpdatedTimestampFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxProfileObjectCount'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxAvailableProfileObjectCount'),
                new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StandardIdentifiers'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldNames'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROFILE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMMUNICATION_RECORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNIQUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECONDARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOOKUP_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEW_ONLY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function searchProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('BusinessName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirstName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MiddleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BirthDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gender'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobilePhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomePhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('BusinessPhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('PersonalEmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('BusinessEmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShippingAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('MailingAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('BillingAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('FoundByItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartyTypeString'),
                    new \PHPStan\Type\Constant\ConstantStringType('GenderString'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INDIVIDUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSINESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MALE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FEMALE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSPECIFIED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('County'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Province'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('County'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Province'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('County'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Province'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('Address1'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address4'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('County'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Province'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function updateCalculatedAttributeDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CalculatedAttributeName'),
                new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                new \PHPStan\Type\Constant\ConstantStringType('Conditions'),
                new \PHPStan\Type\Constant\ConstantStringType('AttributeDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FIRST_OCCURRENCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAST_OCCURRENCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('MINIMUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVERAGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAX_OCCURRENCE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Range'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQUAL_TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL_TO'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultExpirationDays'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultEncryptionKey'),
                new \PHPStan\Type\Constant\ConstantStringType('DeadLetterQueueUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Matching'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleBasedMatching'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoMerging'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportingConfig'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DayOfTheWeek'),
                        new \PHPStan\Type\Constant\ConstantStringType('Time'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Consolidation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConflictResolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinAllowedConfidenceScoreForMerging'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MatchingAttributesList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConflictResolvingModel'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RECENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Exporting'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3KeyName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchingRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAllowedRuleLevelForMerging'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAllowedRuleLevelForMatching'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeTypesSelector'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConflictResolution'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportingConfig'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConflictResolvingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RECENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Exporting'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3KeyName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateEventTrigger(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventTriggerName'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EventTriggerConditions'),
                new \PHPStan\Type\Constant\ConstantStringType('SegmentFilter'),
                new \PHPStan\Type\Constant\ConstantStringType('EventTriggerLimits'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventTriggerDimensions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalOperator'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectAttributes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INCLUSIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXCLUSIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEGINS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEFORE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AFTER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ON'),
                                new \PHPStan\Type\Constant\ConstantStringType('BETWEEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_BETWEEN'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Periods'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxInvocationsPerProfile'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unlimited'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}