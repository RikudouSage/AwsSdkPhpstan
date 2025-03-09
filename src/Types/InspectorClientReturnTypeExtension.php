<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class InspectorClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Inspector\InspectorClient>
     */
    public function getClass(): string
    {
        return \Aws\Inspector\InspectorClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addAttributesToFindings',
            'createAssessmentTarget',
            'createAssessmentTemplate',
            'createExclusionsPreview',
            'createResourceGroup',
            'deleteAssessmentRun',
            'deleteAssessmentTarget',
            'deleteAssessmentTemplate',
            'describeAssessmentRuns',
            'describeAssessmentTargets',
            'describeAssessmentTemplates',
            'describeCrossAccountAccessRole',
            'describeExclusions',
            'describeFindings',
            'describeResourceGroups',
            'describeRulesPackages',
            'getAssessmentReport',
            'getExclusionsPreview',
            'getTelemetryMetadata',
            'listAssessmentRunAgents',
            'listAssessmentRuns',
            'listAssessmentTargets',
            'listAssessmentTemplates',
            'listEventSubscriptions',
            'listExclusions',
            'listFindings',
            'listRulesPackages',
            'listTagsForResource',
            'previewAgents',
            'registerCrossAccountAccessRole',
            'removeAttributesFromFindings',
            'setTagsForResource',
            'startAssessmentRun',
            'stopAssessmentRun',
            'subscribeToEvent',
            'unsubscribeFromEvent',
            'updateAssessmentTarget',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addAttributesToFindings' => $this->addAttributesToFindings(),
            'createAssessmentTarget' => $this->createAssessmentTarget(),
            'createAssessmentTemplate' => $this->createAssessmentTemplate(),
            'createExclusionsPreview' => $this->createExclusionsPreview(),
            'createResourceGroup' => $this->createResourceGroup(),
            'deleteAssessmentRun' => $this->deleteAssessmentRun(),
            'deleteAssessmentTarget' => $this->deleteAssessmentTarget(),
            'deleteAssessmentTemplate' => $this->deleteAssessmentTemplate(),
            'describeAssessmentRuns' => $this->describeAssessmentRuns(),
            'describeAssessmentTargets' => $this->describeAssessmentTargets(),
            'describeAssessmentTemplates' => $this->describeAssessmentTemplates(),
            'describeCrossAccountAccessRole' => $this->describeCrossAccountAccessRole(),
            'describeExclusions' => $this->describeExclusions(),
            'describeFindings' => $this->describeFindings(),
            'describeResourceGroups' => $this->describeResourceGroups(),
            'describeRulesPackages' => $this->describeRulesPackages(),
            'getAssessmentReport' => $this->getAssessmentReport(),
            'getExclusionsPreview' => $this->getExclusionsPreview(),
            'getTelemetryMetadata' => $this->getTelemetryMetadata(),
            'listAssessmentRunAgents' => $this->listAssessmentRunAgents(),
            'listAssessmentRuns' => $this->listAssessmentRuns(),
            'listAssessmentTargets' => $this->listAssessmentTargets(),
            'listAssessmentTemplates' => $this->listAssessmentTemplates(),
            'listEventSubscriptions' => $this->listEventSubscriptions(),
            'listExclusions' => $this->listExclusions(),
            'listFindings' => $this->listFindings(),
            'listRulesPackages' => $this->listRulesPackages(),
            'listTagsForResource' => $this->listTagsForResource(),
            'previewAgents' => $this->previewAgents(),
            'registerCrossAccountAccessRole' => $this->registerCrossAccountAccessRole(),
            'removeAttributesFromFindings' => $this->removeAttributesFromFindings(),
            'setTagsForResource' => $this->setTagsForResource(),
            'startAssessmentRun' => $this->startAssessmentRun(),
            'stopAssessmentRun' => $this->stopAssessmentRun(),
            'subscribeToEvent' => $this->subscribeToEvent(),
            'unsubscribeFromEvent' => $this->unsubscribeFromEvent(),
            'updateAssessmentTarget' => $this->updateAssessmentTarget(),
        };
    }
    private function addAttributesToFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('failedItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryable'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_DOES_NOT_EXIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function createAssessmentTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentTargetArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAssessmentTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentTemplateArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createExclusionsPreview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('previewToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createResourceGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceGroupArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAssessmentRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAssessmentTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAssessmentTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeAssessmentRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentRuns'),
                new \PHPStan\Type\Constant\ConstantStringType('failedItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentTemplateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('durationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('rulesPackageArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('userAttributesForFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('completedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('stateChangedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollected'),
                        new \PHPStan\Type\Constant\ConstantStringType('stateChanges'),
                        new \PHPStan\Type\Constant\ConstantStringType('notifications'),
                        new \PHPStan\Type\Constant\ConstantStringType('findingCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('START_DATA_COLLECTION_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('START_DATA_COLLECTION_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COLLECTING_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOP_DATA_COLLECTION_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATA_COLLECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('START_EVALUATING_RULES_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVALUATING_RULES'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERRORS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('stateChangedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('state'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('START_DATA_COLLECTION_PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('START_DATA_COLLECTION_IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COLLECTING_DATA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOP_DATA_COLLECTION_PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATA_COLLECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('START_EVALUATING_RULES_PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EVALUATING_RULES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERRORS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('date'),
                                new \PHPStan\Type\Constant\ConstantStringType('event'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                                new \PHPStan\Type\Constant\ConstantStringType('error'),
                                new \PHPStan\Type\Constant\ConstantStringType('snsTopicArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('snsPublishStatusCode'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ASSESSMENT_RUN_STARTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASSESSMENT_RUN_COMPLETED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASSESSMENT_RUN_STATE_CHANGED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FINDING_REPORTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TOPIC_DOES_NOT_EXIST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                            new \PHPStan\Type\Constant\ConstantStringType('Informational'),
                            new \PHPStan\Type\Constant\ConstantStringType('Undefined'),
                        ]), new \PHPStan\Type\IntegerType()),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryable'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_DOES_NOT_EXIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function describeAssessmentTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('failedItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryable'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_DOES_NOT_EXIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function describeAssessmentTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('failedItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentTargetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('durationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('rulesPackageArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('userAttributesForFindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastAssessmentRunArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentRunCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryable'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_DOES_NOT_EXIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function describeCrossAccountAccessRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('valid'),
                new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeExclusions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('exclusions'),
                new \PHPStan\Type\Constant\ConstantStringType('failedItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                    new \PHPStan\Type\Constant\ConstantStringType('scopes'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('RULES_PACKAGE_ARN'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryable'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_DOES_NOT_EXIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function describeFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
                new \PHPStan\Type\Constant\ConstantStringType('failedItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('schemaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('service'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('assetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('assetAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('numericSeverity'),
                        new \PHPStan\Type\Constant\ConstantStringType('confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('indicatorOfCompromise'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('userAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('schemaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('assessmentRunArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('rulesPackageArn'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2-instance'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('schemaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('amiId'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4Addresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('privateDnsName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('privateIpAddresses'),
                                    new \PHPStan\Type\Constant\ConstantStringType('publicDnsName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('publicIp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ipv6Addresses'),
                                    new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('privateDnsName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('groupId'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                            new \PHPStan\Type\Constant\ConstantStringType('Informational'),
                            new \PHPStan\Type\Constant\ConstantStringType('Undefined'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryable'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_DOES_NOT_EXIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function describeResourceGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('failedItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryable'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_DOES_NOT_EXIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function describeRulesPackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('rulesPackages'),
                new \PHPStan\Type\Constant\ConstantStringType('failedItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryable'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_DOES_NOT_EXIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function getAssessmentReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('url'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WORK_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getExclusionsPreview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('previewStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('exclusionPreviews'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WORK_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                        new \PHPStan\Type\Constant\ConstantStringType('scopes'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RULES_PACKAGE_ARN'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTelemetryMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('telemetryMetadata'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listAssessmentRunAgents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentRunAgents'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('assessmentRunArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentHealth'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentHealthCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentHealthDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('telemetryMetadata'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IDLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHUTDOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('messageType'),
                                new \PHPStan\Type\Constant\ConstantStringType('count'),
                                new \PHPStan\Type\Constant\ConstantStringType('dataSize'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssessmentRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentRunArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssessmentTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentTargetArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssessmentTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentTemplateArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEventSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('topicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventSubscriptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('event'),
                                new \PHPStan\Type\Constant\ConstantStringType('subscribedAt'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ASSESSMENT_RUN_STARTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASSESSMENT_RUN_COMPLETED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASSESSMENT_RUN_STATE_CHANGED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FINDING_REPORTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExclusions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('exclusionArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findingArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRulesPackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('rulesPackageArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function previewAgents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentPreviews'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentHealth'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('operatingSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('kernelVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4Address'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerCrossAccountAccessRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removeAttributesFromFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('failedItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryable'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ITEM_DOES_NOT_EXIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function setTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startAssessmentRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentRunArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopAssessmentRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function subscribeToEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function unsubscribeFromEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAssessmentTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}