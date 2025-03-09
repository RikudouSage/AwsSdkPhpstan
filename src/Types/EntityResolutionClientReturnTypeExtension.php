<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class EntityResolutionClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\EntityResolution\EntityResolutionClient>
     */
    public function getClass(): string
    {
        return \Aws\EntityResolution\EntityResolutionClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addPolicyStatement',
            'batchDeleteUniqueId',
            'createIdMappingWorkflow',
            'createIdNamespace',
            'createMatchingWorkflow',
            'createSchemaMapping',
            'deleteIdMappingWorkflow',
            'deleteIdNamespace',
            'deleteMatchingWorkflow',
            'deletePolicyStatement',
            'deleteSchemaMapping',
            'getIdMappingJob',
            'getIdMappingWorkflow',
            'getIdNamespace',
            'getMatchId',
            'getMatchingJob',
            'getMatchingWorkflow',
            'getPolicy',
            'getProviderService',
            'getSchemaMapping',
            'listIdMappingJobs',
            'listIdMappingWorkflows',
            'listIdNamespaces',
            'listMatchingJobs',
            'listMatchingWorkflows',
            'listProviderServices',
            'listSchemaMappings',
            'listTagsForResource',
            'putPolicy',
            'startIdMappingJob',
            'startMatchingJob',
            'tagResource',
            'untagResource',
            'updateIdMappingWorkflow',
            'updateIdNamespace',
            'updateMatchingWorkflow',
            'updateSchemaMapping',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addPolicyStatement' => $this->addPolicyStatement(),
            'batchDeleteUniqueId' => $this->batchDeleteUniqueId(),
            'createIdMappingWorkflow' => $this->createIdMappingWorkflow(),
            'createIdNamespace' => $this->createIdNamespace(),
            'createMatchingWorkflow' => $this->createMatchingWorkflow(),
            'createSchemaMapping' => $this->createSchemaMapping(),
            'deleteIdMappingWorkflow' => $this->deleteIdMappingWorkflow(),
            'deleteIdNamespace' => $this->deleteIdNamespace(),
            'deleteMatchingWorkflow' => $this->deleteMatchingWorkflow(),
            'deletePolicyStatement' => $this->deletePolicyStatement(),
            'deleteSchemaMapping' => $this->deleteSchemaMapping(),
            'getIdMappingJob' => $this->getIdMappingJob(),
            'getIdMappingWorkflow' => $this->getIdMappingWorkflow(),
            'getIdNamespace' => $this->getIdNamespace(),
            'getMatchId' => $this->getMatchId(),
            'getMatchingJob' => $this->getMatchingJob(),
            'getMatchingWorkflow' => $this->getMatchingWorkflow(),
            'getPolicy' => $this->getPolicy(),
            'getProviderService' => $this->getProviderService(),
            'getSchemaMapping' => $this->getSchemaMapping(),
            'listIdMappingJobs' => $this->listIdMappingJobs(),
            'listIdMappingWorkflows' => $this->listIdMappingWorkflows(),
            'listIdNamespaces' => $this->listIdNamespaces(),
            'listMatchingJobs' => $this->listMatchingJobs(),
            'listMatchingWorkflows' => $this->listMatchingWorkflows(),
            'listProviderServices' => $this->listProviderServices(),
            'listSchemaMappings' => $this->listSchemaMappings(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putPolicy' => $this->putPolicy(),
            'startIdMappingJob' => $this->startIdMappingJob(),
            'startMatchingJob' => $this->startMatchingJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateIdMappingWorkflow' => $this->updateIdMappingWorkflow(),
            'updateIdNamespace' => $this->updateIdNamespace(),
            'updateMatchingWorkflow' => $this->updateMatchingWorkflow(),
            'updateSchemaMapping' => $this->updateSchemaMapping(),
        };
    }
    private function addPolicyStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('token'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchDeleteUniqueId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                new \PHPStan\Type\Constant\ConstantStringType('disconnectedUniqueIds'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uniqueId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('uniqueId'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                ]),
            ]),
        ]);
    }
    private function createIdMappingWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('idMappingTechniques'),
                new \PHPStan\Type\Constant\ConstantStringType('inputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('outputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('idMappingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleBasedProperties'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('RULE_BASED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('intermediateSourceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerServiceArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('intermediateS3Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleDefinitionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_SOURCE_TO_ONE_TARGET'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_SOURCE_TO_ONE_TARGET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('matchingKeys'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputSourceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMSArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createIdNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('idMappingWorkflowProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('inputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('idMappingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleBasedProperties'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('RULE_BASED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('providerConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerServiceArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordMatchingModels'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleDefinitionTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_SOURCE_TO_ONE_TARGET'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_SOURCE_TO_ONE_TARGET'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('matchingKeys'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputSourceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createMatchingWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('incrementalRunConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('inputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('outputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('resolutionTechniques'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('incrementalRunType'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('IMMEDIATE'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('applyNormalization'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputSourceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMSArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('applyNormalization'),
                    new \PHPStan\Type\Constant\ConstantStringType('output'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('hashed'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('providerProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolutionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleBasedProperties'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('intermediateSourceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerServiceArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('intermediateS3Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RULE_MATCHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ML_MATCHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('matchPurpose'),
                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IDENTIFIER_GENERATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INDEXING'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('matchingKeys'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSchemaMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('mappedInputFields'),
                new \PHPStan\Type\Constant\ConstantStringType('schemaArn'),
                new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hashed'),
                    new \PHPStan\Type\Constant\ConstantStringType('matchKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('subType'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME_FIRST'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME_MIDDLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME_LAST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_CITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_COUNTRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_POSTALCODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_COUNTRYCODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNIQUE_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ID'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteIdMappingWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteIdNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteMatchingWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deletePolicyStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('token'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteSchemaMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getIdMappingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('errorDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('metrics'),
                new \PHPStan\Type\Constant\ConstantStringType('outputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('recordsNotProcessed'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalMappedRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalMappedSourceRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalMappedTargetRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalRecordsProcessed'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMSArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                ]),
            ]),
        ]);
    }
    private function getIdMappingWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('idMappingTechniques'),
                new \PHPStan\Type\Constant\ConstantStringType('inputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('outputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowName'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('idMappingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleBasedProperties'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('RULE_BASED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('intermediateSourceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerServiceArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('intermediateS3Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleDefinitionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_SOURCE_TO_ONE_TARGET'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_SOURCE_TO_ONE_TARGET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('matchingKeys'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputSourceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMSArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getIdNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('idMappingWorkflowProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('inputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('idMappingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleBasedProperties'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('RULE_BASED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('providerConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerServiceArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordMatchingModels'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleDefinitionTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_SOURCE_TO_ONE_TARGET'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_SOURCE_TO_ONE_TARGET'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('matchingKeys'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputSourceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getMatchId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('matchId'),
                new \PHPStan\Type\Constant\ConstantStringType('matchRule'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMatchingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('errorDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('metrics'),
                new \PHPStan\Type\Constant\ConstantStringType('outputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('matchIDs'),
                    new \PHPStan\Type\Constant\ConstantStringType('recordsNotProcessed'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalRecordsProcessed'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMSArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                ]),
            ]),
        ]);
    }
    private function getMatchingWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('incrementalRunConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('inputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('outputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('resolutionTechniques'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowName'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('incrementalRunType'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('IMMEDIATE'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('applyNormalization'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputSourceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMSArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('applyNormalization'),
                    new \PHPStan\Type\Constant\ConstantStringType('output'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('hashed'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('providerProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolutionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleBasedProperties'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('intermediateSourceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerServiceArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('intermediateS3Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RULE_MATCHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ML_MATCHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('matchPurpose'),
                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IDENTIFIER_GENERATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INDEXING'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('matchingKeys'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('token'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getProviderService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('anonymizedOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('providerComponentSchema'),
                new \PHPStan\Type\Constant\ConstantStringType('providerConfigurationDefinition'),
                new \PHPStan\Type\Constant\ConstantStringType('providerEndpointConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('providerEntityOutputDefinition'),
                new \PHPStan\Type\Constant\ConstantStringType('providerIdNameSpaceConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('providerIntermediateDataAccessConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('providerJobConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('providerServiceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('providerServiceDisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('providerServiceName'),
                new \PHPStan\Type\Constant\ConstantStringType('providerServiceType'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('providerSchemaAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemas'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                        new \PHPStan\Type\Constant\ConstantStringType('hashing'),
                        new \PHPStan\Type\Constant\ConstantStringType('subType'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAME_FIRST'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAME_MIDDLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAME_LAST'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET3'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_CITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_COUNTRY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_POSTALCODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE_COUNTRYCODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNIQUE_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ID'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('marketplaceConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('listingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerSourceConfigurationDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerTargetConfigurationDefinition'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('requiredBucketActions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSIGNMENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING'),
                ]),
            ]),
        ]);
    }
    private function getSchemaMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('hasWorkflows'),
                new \PHPStan\Type\Constant\ConstantStringType('mappedInputFields'),
                new \PHPStan\Type\Constant\ConstantStringType('schemaArn'),
                new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hashed'),
                    new \PHPStan\Type\Constant\ConstantStringType('matchKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('subType'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME_FIRST'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME_MIDDLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME_LAST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_CITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_COUNTRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_POSTALCODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_COUNTRYCODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNIQUE_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ID'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listIdMappingJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIdMappingWorkflows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('workflowArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('workflowName'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listIdNamespaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('idMappingWorkflowProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('idNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('idNamespaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('idMappingType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVIDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('RULE_BASED'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMatchingJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMatchingWorkflows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolutionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('workflowArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('workflowName'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RULE_MATCHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ML_MATCHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listProviderServices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('providerServiceSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerServiceDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerServiceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASSIGNMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID_MAPPING'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listSchemaMappings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('schemaList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('hasWorkflows'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function putPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('token'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startIdMappingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('outputSourceConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMSArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function startMatchingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
            ], [
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
    private function updateIdMappingWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('idMappingTechniques'),
                new \PHPStan\Type\Constant\ConstantStringType('inputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('outputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('idMappingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleBasedProperties'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('RULE_BASED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('intermediateSourceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerServiceArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('intermediateS3Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleDefinitionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_SOURCE_TO_ONE_TARGET'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_SOURCE_TO_ONE_TARGET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('matchingKeys'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputSourceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMSArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateIdNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('idMappingWorkflowProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('idNamespaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('inputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('idMappingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleBasedProperties'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('RULE_BASED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('providerConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerServiceArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordMatchingModels'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleDefinitionTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_SOURCE_TO_ONE_TARGET'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_SOURCE_TO_ONE_TARGET'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('matchingKeys'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputSourceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SOURCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TARGET'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateMatchingWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('incrementalRunConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('inputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('outputSourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('resolutionTechniques'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('incrementalRunType'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('IMMEDIATE'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('applyNormalization'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputSourceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMSArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('applyNormalization'),
                    new \PHPStan\Type\Constant\ConstantStringType('output'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('hashed'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('providerProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolutionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleBasedProperties'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('intermediateSourceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerServiceArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('intermediateS3Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RULE_MATCHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ML_MATCHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMatchingModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('matchPurpose'),
                        new \PHPStan\Type\Constant\ConstantStringType('rules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_TO_ONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANY_TO_MANY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IDENTIFIER_GENERATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INDEXING'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('matchingKeys'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSchemaMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('mappedInputFields'),
                new \PHPStan\Type\Constant\ConstantStringType('schemaArn'),
                new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                    new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hashed'),
                    new \PHPStan\Type\Constant\ConstantStringType('matchKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('subType'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME_FIRST'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME_MIDDLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME_LAST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STREET3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_CITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_COUNTRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS_POSTALCODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE_COUNTRYCODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNIQUE_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ID'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}