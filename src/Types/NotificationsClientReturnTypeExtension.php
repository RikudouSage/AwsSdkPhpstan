<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class NotificationsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Notifications\NotificationsClient>
     */
    public function getClass(): string
    {
        return \Aws\Notifications\NotificationsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateChannel',
            'associateManagedNotificationAccountContact',
            'associateManagedNotificationAdditionalChannel',
            'createEventRule',
            'createNotificationConfiguration',
            'deleteEventRule',
            'deleteNotificationConfiguration',
            'deregisterNotificationHub',
            'disableNotificationsAccessForOrganization',
            'disassociateChannel',
            'disassociateManagedNotificationAccountContact',
            'disassociateManagedNotificationAdditionalChannel',
            'enableNotificationsAccessForOrganization',
            'getEventRule',
            'getManagedNotificationChildEvent',
            'getManagedNotificationConfiguration',
            'getManagedNotificationEvent',
            'getNotificationConfiguration',
            'getNotificationEvent',
            'getNotificationsAccessForOrganization',
            'listChannels',
            'listEventRules',
            'listManagedNotificationChannelAssociations',
            'listManagedNotificationChildEvents',
            'listManagedNotificationConfigurations',
            'listManagedNotificationEvents',
            'listNotificationConfigurations',
            'listNotificationEvents',
            'listNotificationHubs',
            'listTagsForResource',
            'registerNotificationHub',
            'tagResource',
            'untagResource',
            'updateEventRule',
            'updateNotificationConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateChannel' => $this->associateChannel(),
            'associateManagedNotificationAccountContact' => $this->associateManagedNotificationAccountContact(),
            'associateManagedNotificationAdditionalChannel' => $this->associateManagedNotificationAdditionalChannel(),
            'createEventRule' => $this->createEventRule(),
            'createNotificationConfiguration' => $this->createNotificationConfiguration(),
            'deleteEventRule' => $this->deleteEventRule(),
            'deleteNotificationConfiguration' => $this->deleteNotificationConfiguration(),
            'deregisterNotificationHub' => $this->deregisterNotificationHub(),
            'disableNotificationsAccessForOrganization' => $this->disableNotificationsAccessForOrganization(),
            'disassociateChannel' => $this->disassociateChannel(),
            'disassociateManagedNotificationAccountContact' => $this->disassociateManagedNotificationAccountContact(),
            'disassociateManagedNotificationAdditionalChannel' => $this->disassociateManagedNotificationAdditionalChannel(),
            'enableNotificationsAccessForOrganization' => $this->enableNotificationsAccessForOrganization(),
            'getEventRule' => $this->getEventRule(),
            'getManagedNotificationChildEvent' => $this->getManagedNotificationChildEvent(),
            'getManagedNotificationConfiguration' => $this->getManagedNotificationConfiguration(),
            'getManagedNotificationEvent' => $this->getManagedNotificationEvent(),
            'getNotificationConfiguration' => $this->getNotificationConfiguration(),
            'getNotificationEvent' => $this->getNotificationEvent(),
            'getNotificationsAccessForOrganization' => $this->getNotificationsAccessForOrganization(),
            'listChannels' => $this->listChannels(),
            'listEventRules' => $this->listEventRules(),
            'listManagedNotificationChannelAssociations' => $this->listManagedNotificationChannelAssociations(),
            'listManagedNotificationChildEvents' => $this->listManagedNotificationChildEvents(),
            'listManagedNotificationConfigurations' => $this->listManagedNotificationConfigurations(),
            'listManagedNotificationEvents' => $this->listManagedNotificationEvents(),
            'listNotificationConfigurations' => $this->listNotificationConfigurations(),
            'listNotificationEvents' => $this->listNotificationEvents(),
            'listNotificationHubs' => $this->listNotificationHubs(),
            'listTagsForResource' => $this->listTagsForResource(),
            'registerNotificationHub' => $this->registerNotificationHub(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateEventRule' => $this->updateEventRule(),
            'updateNotificationConfiguration' => $this->updateNotificationConfiguration(),
        };
    }
    private function associateChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateManagedNotificationAccountContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateManagedNotificationAdditionalChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createEventRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('notificationConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('statusSummaryByRegion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
            ]),
        ]);
    }
    private function deleteEventRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterNotificationHub(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('notificationHubRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('statusSummary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function disableNotificationsAccessForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateManagedNotificationAccountContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateManagedNotificationAdditionalChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableNotificationsAccessForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getEventRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('notificationConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('source'),
                new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                new \PHPStan\Type\Constant\ConstantStringType('eventPattern'),
                new \PHPStan\Type\Constant\ConstantStringType('regions'),
                new \PHPStan\Type\Constant\ConstantStringType('managedRules'),
                new \PHPStan\Type\Constant\ConstantStringType('statusSummaryByRegion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getManagedNotificationChildEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('managedNotificationConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('content'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('schemaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageComponents'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceEventDetailUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceEventDetailUrlDisplayText'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregateManagedNotificationEventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('textParts'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationalUnitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregationDetail'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('v1.0'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('headline'),
                        new \PHPStan\Type\Constant\ConstantStringType('paragraphSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('completeDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANNOUNCEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayText'),
                        new \PHPStan\Type\Constant\ConstantStringType('textByLocale'),
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOCALIZED_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('de_DE'),
                            new \PHPStan\Type\Constant\ConstantStringType('en_CA'),
                            new \PHPStan\Type\Constant\ConstantStringType('en_US'),
                            new \PHPStan\Type\Constant\ConstantStringType('en_UK'),
                            new \PHPStan\Type\Constant\ConstantStringType('es_ES'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr_CA'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr_FR'),
                            new \PHPStan\Type\Constant\ConstantStringType('id_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('it_IT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ja_JP'),
                            new \PHPStan\Type\Constant\ConstantStringType('ko_KR'),
                            new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                            new \PHPStan\Type\Constant\ConstantStringType('tr_TR'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                        ]), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('summarizationDimensions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getManagedNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('category'),
                new \PHPStan\Type\Constant\ConstantStringType('subCategory'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getManagedNotificationEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('managedNotificationConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('content'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('schemaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageComponents'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceEventDetailUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceEventDetailUrlDisplayText'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregationEventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregationSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('textParts'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationalUnitId'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('v1.0'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('headline'),
                        new \PHPStan\Type\Constant\ConstantStringType('paragraphSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('completeDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANNOUNCEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedRegions'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedOrganizationalUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('additionalSummarizationDimensions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayText'),
                        new \PHPStan\Type\Constant\ConstantStringType('textByLocale'),
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOCALIZED_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('de_DE'),
                            new \PHPStan\Type\Constant\ConstantStringType('en_CA'),
                            new \PHPStan\Type\Constant\ConstantStringType('en_US'),
                            new \PHPStan\Type\Constant\ConstantStringType('en_UK'),
                            new \PHPStan\Type\Constant\ConstantStringType('es_ES'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr_CA'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr_FR'),
                            new \PHPStan\Type\Constant\ConstantStringType('id_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('it_IT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ja_JP'),
                            new \PHPStan\Type\Constant\ConstantStringType('ko_KR'),
                            new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                            new \PHPStan\Type\Constant\ConstantStringType('tr_TR'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                        ]), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('aggregationDuration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                    new \PHPStan\Type\Constant\ConstantStringType('SHORT'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
            ]),
        ]);
    }
    private function getNotificationEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('notificationConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('content'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('schemaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceEventMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageComponents'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceEventDetailUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceEventDetailUrlDisplayText'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregationEventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregateNotificationEventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregationSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('textParts'),
                    new \PHPStan\Type\Constant\ConstantStringType('media'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('v1.0'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventTypeVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceEventId'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventOriginRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('relatedAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventOccurrenceTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('relatedResources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('detailUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('headline'),
                        new \PHPStan\Type\Constant\ConstantStringType('paragraphSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('completeDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANNOUNCEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedRegions'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedOrganizationalUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('additionalSummarizationDimensions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayText'),
                        new \PHPStan\Type\Constant\ConstantStringType('textByLocale'),
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOCALIZED_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('de_DE'),
                            new \PHPStan\Type\Constant\ConstantStringType('en_CA'),
                            new \PHPStan\Type\Constant\ConstantStringType('en_US'),
                            new \PHPStan\Type\Constant\ConstantStringType('en_UK'),
                            new \PHPStan\Type\Constant\ConstantStringType('es_ES'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr_CA'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr_FR'),
                            new \PHPStan\Type\Constant\ConstantStringType('id_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('it_IT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ja_JP'),
                            new \PHPStan\Type\Constant\ConstantStringType('ko_KR'),
                            new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                            new \PHPStan\Type\Constant\ConstantStringType('tr_TR'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                        ]), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('mediaId'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                        new \PHPStan\Type\Constant\ConstantStringType('caption'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getNotificationsAccessForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('notificationsAccessForOrganization'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessStatus'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listChannels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('channels'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEventRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('eventRules'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventPattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('regions'),
                    new \PHPStan\Type\Constant\ConstantStringType('managedRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusSummaryByRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listManagedNotificationChannelAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('channelAssociations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('channelIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelType'),
                    new \PHPStan\Type\Constant\ConstantStringType('overrideOption'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MOBILE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHATBOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_CONTACT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listManagedNotificationChildEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('managedNotificationChildEvents'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('managedNotificationConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('relatedAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('childEvent'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregateManagedNotificationEventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationalUnitId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('schemaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceEventMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('messageComponents'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregationDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('notificationType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('v1.0'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('eventOriginRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('headline'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('summarizationDimensions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANNOUNCEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listManagedNotificationConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('managedNotificationConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listManagedNotificationEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('managedNotificationEvents'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('managedNotificationConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('relatedAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationEvent'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregationEventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationalUnitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregationSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregatedNotificationRegions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('schemaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceEventMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('messageComponents'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('notificationType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('v1.0'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('eventOriginRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('headline'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANNOUNCEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedRegions'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedOrganizationalUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('additionalSummarizationDimensions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listNotificationConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('notificationConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregationDuration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listNotificationEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('notificationEvents'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('relatedAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationEvent'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregationEventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregateNotificationEventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregationSummary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('schemaVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceEventMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('messageComponents'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('notificationType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('v1.0'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('eventOriginRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('headline'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANNOUNCEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AGGREGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedRegions'),
                        new \PHPStan\Type\Constant\ConstantStringType('aggregatedOrganizationalUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('additionalSummarizationDimensions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('sampleValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listNotificationHubs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('notificationHubs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('notificationHubRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastActivationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REGISTERING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
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
    private function registerNotificationHub(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('notificationHubRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('statusSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastActivationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updateEventRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('notificationConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('statusSummaryByRegion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}