<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SSMIncidentsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SSMIncidents\SSMIncidentsClient>
     */
    public function getClass(): string
    {
        return \Aws\SSMIncidents\SSMIncidentsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchGetIncidentFindings',
            'createReplicationSet',
            'createResponsePlan',
            'createTimelineEvent',
            'deleteIncidentRecord',
            'deleteReplicationSet',
            'deleteResourcePolicy',
            'deleteResponsePlan',
            'deleteTimelineEvent',
            'getIncidentRecord',
            'getReplicationSet',
            'getResourcePolicies',
            'getResponsePlan',
            'getTimelineEvent',
            'listIncidentFindings',
            'listIncidentRecords',
            'listRelatedItems',
            'listReplicationSets',
            'listResponsePlans',
            'listTagsForResource',
            'listTimelineEvents',
            'putResourcePolicy',
            'startIncident',
            'tagResource',
            'untagResource',
            'updateDeletionProtection',
            'updateIncidentRecord',
            'updateRelatedItems',
            'updateReplicationSet',
            'updateResponsePlan',
            'updateTimelineEvent',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchGetIncidentFindings' => $this->batchGetIncidentFindings(),
            'createReplicationSet' => $this->createReplicationSet(),
            'createResponsePlan' => $this->createResponsePlan(),
            'createTimelineEvent' => $this->createTimelineEvent(),
            'deleteIncidentRecord' => $this->deleteIncidentRecord(),
            'deleteReplicationSet' => $this->deleteReplicationSet(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteResponsePlan' => $this->deleteResponsePlan(),
            'deleteTimelineEvent' => $this->deleteTimelineEvent(),
            'getIncidentRecord' => $this->getIncidentRecord(),
            'getReplicationSet' => $this->getReplicationSet(),
            'getResourcePolicies' => $this->getResourcePolicies(),
            'getResponsePlan' => $this->getResponsePlan(),
            'getTimelineEvent' => $this->getTimelineEvent(),
            'listIncidentFindings' => $this->listIncidentFindings(),
            'listIncidentRecords' => $this->listIncidentRecords(),
            'listRelatedItems' => $this->listRelatedItems(),
            'listReplicationSets' => $this->listReplicationSets(),
            'listResponsePlans' => $this->listResponsePlans(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTimelineEvents' => $this->listTimelineEvents(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'startIncident' => $this->startIncident(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDeletionProtection' => $this->updateDeletionProtection(),
            'updateIncidentRecord' => $this->updateIncidentRecord(),
            'updateRelatedItems' => $this->updateRelatedItems(),
            'updateReplicationSet' => $this->updateReplicationSet(),
            'updateResponsePlan' => $this->updateResponsePlan(),
            'updateTimelineEvent' => $this->updateTimelineEvent(),
        };
    }
    private function batchGetIncidentFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('findingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudFormationStackUpdate'),
                            new \PHPStan\Type\Constant\ConstantStringType('codeDeployDeployment'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('stackArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('deploymentGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createReplicationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createResponsePlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTimelineEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                new \PHPStan\Type\Constant\ConstantStringType('incidentRecordArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteIncidentRecord(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteReplicationSet(): ?\PHPStan\Type\Type
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
    private function deleteResponsePlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTimelineEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getIncidentRecord(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('incidentRecord'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('automationExecutions'),
                    new \PHPStan\Type\Constant\ConstantStringType('chatChannel'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('dedupeString'),
                    new \PHPStan\Type\Constant\ConstantStringType('impact'),
                    new \PHPStan\Type\Constant\ConstantStringType('incidentRecordSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolvedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ssmExecutionArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('chatbotSns'),
                        new \PHPStan\Type\Constant\ConstantStringType('empty'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('invokedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('snsTopicArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getReplicationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('replicationSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('deletionProtected'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('regionMap'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sseKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusUpdateDateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getResourcePolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('resourcePolicies'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ramResourceShareRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getResponsePlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actions'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('chatChannel'),
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('engagements'),
                new \PHPStan\Type\Constant\ConstantStringType('incidentTemplate'),
                new \PHPStan\Type\Constant\ConstantStringType('integrations'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ssmAutomation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('documentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('documentVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('dynamicParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetAccount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('variable'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INCIDENT_RECORD_ARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INVOLVED_RESOURCES'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ]))),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_PLAN_OWNER_ACCOUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPACTED_ACCOUNT'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('chatbotSns'),
                    new \PHPStan\Type\Constant\ConstantStringType('empty'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dedupeString'),
                    new \PHPStan\Type\Constant\ConstantStringType('impact'),
                    new \PHPStan\Type\Constant\ConstantStringType('incidentTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('snsTopicArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pagerDutyConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('pagerDutyIncidentConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('secretId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTimelineEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('event'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eventData'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventReferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('incidentRecordArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('relatedItemId'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listIncidentFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIncidentRecords(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('incidentRecordSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('impact'),
                        new \PHPStan\Type\Constant\ConstantStringType('incidentRecordSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolvedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                            new \PHPStan\Type\Constant\ConstantStringType('invokedBy'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRelatedItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('relatedItems'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('generatedId'),
                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS'),
                                new \PHPStan\Type\Constant\ConstantStringType('INCIDENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('METRIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('PARENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVOLVED_RESOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('metricDefinition'),
                                new \PHPStan\Type\Constant\ConstantStringType('pagerDutyIncidentDetail'),
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('autoResolve'),
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('secretId'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listReplicationSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationSetArns'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listResponsePlans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('responsePlanSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
    private function listTimelineEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('eventSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventReferences'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('incidentRecordArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('relatedItemId'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startIncident(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('incidentRecordArn'),
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
    private function updateDeletionProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateIncidentRecord(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRelatedItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateReplicationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateResponsePlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateTimelineEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}