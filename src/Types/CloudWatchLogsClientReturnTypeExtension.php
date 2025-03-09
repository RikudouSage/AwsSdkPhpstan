<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CloudWatchLogsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CloudWatchLogs\CloudWatchLogsClient>
     */
    public function getClass(): string
    {
        return \Aws\CloudWatchLogs\CloudWatchLogsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateKmsKey',
            'cancelExportTask',
            'createDelivery',
            'createExportTask',
            'createLogAnomalyDetector',
            'createLogGroup',
            'createLogStream',
            'deleteAccountPolicy',
            'deleteDataProtectionPolicy',
            'deleteDelivery',
            'deleteDeliveryDestination',
            'deleteDeliveryDestinationPolicy',
            'deleteDeliverySource',
            'deleteDestination',
            'deleteIndexPolicy',
            'deleteIntegration',
            'deleteLogAnomalyDetector',
            'deleteLogGroup',
            'deleteLogStream',
            'deleteMetricFilter',
            'deleteQueryDefinition',
            'deleteResourcePolicy',
            'deleteRetentionPolicy',
            'deleteSubscriptionFilter',
            'deleteTransformer',
            'describeAccountPolicies',
            'describeConfigurationTemplates',
            'describeDeliveries',
            'describeDeliveryDestinations',
            'describeDeliverySources',
            'describeDestinations',
            'describeExportTasks',
            'describeFieldIndexes',
            'describeIndexPolicies',
            'describeLogGroups',
            'describeLogStreams',
            'describeMetricFilters',
            'describeQueries',
            'describeQueryDefinitions',
            'describeResourcePolicies',
            'describeSubscriptionFilters',
            'disassociateKmsKey',
            'filterLogEvents',
            'getDataProtectionPolicy',
            'getDelivery',
            'getDeliveryDestination',
            'getDeliveryDestinationPolicy',
            'getDeliverySource',
            'getIntegration',
            'getLogAnomalyDetector',
            'getLogEvents',
            'getLogGroupFields',
            'getLogRecord',
            'getQueryResults',
            'getTransformer',
            'listAnomalies',
            'listIntegrations',
            'listLogAnomalyDetectors',
            'listLogGroupsForQuery',
            'listTagsForResource',
            'listTagsLogGroup',
            'putAccountPolicy',
            'putDataProtectionPolicy',
            'putDeliveryDestination',
            'putDeliveryDestinationPolicy',
            'putDeliverySource',
            'putDestination',
            'putDestinationPolicy',
            'putIndexPolicy',
            'putIntegration',
            'putLogEvents',
            'putMetricFilter',
            'putQueryDefinition',
            'putResourcePolicy',
            'putRetentionPolicy',
            'putSubscriptionFilter',
            'putTransformer',
            'startLiveTail',
            'startQuery',
            'stopQuery',
            'tagLogGroup',
            'tagResource',
            'testMetricFilter',
            'testTransformer',
            'untagLogGroup',
            'untagResource',
            'updateAnomaly',
            'updateDeliveryConfiguration',
            'updateLogAnomalyDetector',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateKmsKey' => $this->associateKmsKey(),
            'cancelExportTask' => $this->cancelExportTask(),
            'createDelivery' => $this->createDelivery(),
            'createExportTask' => $this->createExportTask(),
            'createLogAnomalyDetector' => $this->createLogAnomalyDetector(),
            'createLogGroup' => $this->createLogGroup(),
            'createLogStream' => $this->createLogStream(),
            'deleteAccountPolicy' => $this->deleteAccountPolicy(),
            'deleteDataProtectionPolicy' => $this->deleteDataProtectionPolicy(),
            'deleteDelivery' => $this->deleteDelivery(),
            'deleteDeliveryDestination' => $this->deleteDeliveryDestination(),
            'deleteDeliveryDestinationPolicy' => $this->deleteDeliveryDestinationPolicy(),
            'deleteDeliverySource' => $this->deleteDeliverySource(),
            'deleteDestination' => $this->deleteDestination(),
            'deleteIndexPolicy' => $this->deleteIndexPolicy(),
            'deleteIntegration' => $this->deleteIntegration(),
            'deleteLogAnomalyDetector' => $this->deleteLogAnomalyDetector(),
            'deleteLogGroup' => $this->deleteLogGroup(),
            'deleteLogStream' => $this->deleteLogStream(),
            'deleteMetricFilter' => $this->deleteMetricFilter(),
            'deleteQueryDefinition' => $this->deleteQueryDefinition(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteRetentionPolicy' => $this->deleteRetentionPolicy(),
            'deleteSubscriptionFilter' => $this->deleteSubscriptionFilter(),
            'deleteTransformer' => $this->deleteTransformer(),
            'describeAccountPolicies' => $this->describeAccountPolicies(),
            'describeConfigurationTemplates' => $this->describeConfigurationTemplates(),
            'describeDeliveries' => $this->describeDeliveries(),
            'describeDeliveryDestinations' => $this->describeDeliveryDestinations(),
            'describeDeliverySources' => $this->describeDeliverySources(),
            'describeDestinations' => $this->describeDestinations(),
            'describeExportTasks' => $this->describeExportTasks(),
            'describeFieldIndexes' => $this->describeFieldIndexes(),
            'describeIndexPolicies' => $this->describeIndexPolicies(),
            'describeLogGroups' => $this->describeLogGroups(),
            'describeLogStreams' => $this->describeLogStreams(),
            'describeMetricFilters' => $this->describeMetricFilters(),
            'describeQueries' => $this->describeQueries(),
            'describeQueryDefinitions' => $this->describeQueryDefinitions(),
            'describeResourcePolicies' => $this->describeResourcePolicies(),
            'describeSubscriptionFilters' => $this->describeSubscriptionFilters(),
            'disassociateKmsKey' => $this->disassociateKmsKey(),
            'filterLogEvents' => $this->filterLogEvents(),
            'getDataProtectionPolicy' => $this->getDataProtectionPolicy(),
            'getDelivery' => $this->getDelivery(),
            'getDeliveryDestination' => $this->getDeliveryDestination(),
            'getDeliveryDestinationPolicy' => $this->getDeliveryDestinationPolicy(),
            'getDeliverySource' => $this->getDeliverySource(),
            'getIntegration' => $this->getIntegration(),
            'getLogAnomalyDetector' => $this->getLogAnomalyDetector(),
            'getLogEvents' => $this->getLogEvents(),
            'getLogGroupFields' => $this->getLogGroupFields(),
            'getLogRecord' => $this->getLogRecord(),
            'getQueryResults' => $this->getQueryResults(),
            'getTransformer' => $this->getTransformer(),
            'listAnomalies' => $this->listAnomalies(),
            'listIntegrations' => $this->listIntegrations(),
            'listLogAnomalyDetectors' => $this->listLogAnomalyDetectors(),
            'listLogGroupsForQuery' => $this->listLogGroupsForQuery(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTagsLogGroup' => $this->listTagsLogGroup(),
            'putAccountPolicy' => $this->putAccountPolicy(),
            'putDataProtectionPolicy' => $this->putDataProtectionPolicy(),
            'putDeliveryDestination' => $this->putDeliveryDestination(),
            'putDeliveryDestinationPolicy' => $this->putDeliveryDestinationPolicy(),
            'putDeliverySource' => $this->putDeliverySource(),
            'putDestination' => $this->putDestination(),
            'putDestinationPolicy' => $this->putDestinationPolicy(),
            'putIndexPolicy' => $this->putIndexPolicy(),
            'putIntegration' => $this->putIntegration(),
            'putLogEvents' => $this->putLogEvents(),
            'putMetricFilter' => $this->putMetricFilter(),
            'putQueryDefinition' => $this->putQueryDefinition(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'putRetentionPolicy' => $this->putRetentionPolicy(),
            'putSubscriptionFilter' => $this->putSubscriptionFilter(),
            'putTransformer' => $this->putTransformer(),
            'startLiveTail' => $this->startLiveTail(),
            'startQuery' => $this->startQuery(),
            'stopQuery' => $this->stopQuery(),
            'tagLogGroup' => $this->tagLogGroup(),
            'tagResource' => $this->tagResource(),
            'testMetricFilter' => $this->testMetricFilter(),
            'testTransformer' => $this->testTransformer(),
            'untagLogGroup' => $this->untagLogGroup(),
            'untagResource' => $this->untagResource(),
            'updateAnomaly' => $this->updateAnomaly(),
            'updateDeliveryConfiguration' => $this->updateDeliveryConfiguration(),
            'updateLogAnomalyDetector' => $this->updateLogAnomalyDetector(),
        };
    }
    private function associateKmsKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function cancelExportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createDelivery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('delivery'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deliverySourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('recordFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldDelimiter'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3DeliveryConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('CWL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FH'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('suffixPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableHiveCompatiblePath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createExportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLogAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('anomalyDetectorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLogGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createLogStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccountPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDataProtectionPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDelivery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDeliveryDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDeliveryDestinationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDeliverySource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteIndexPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLogAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteLogGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteLogStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMetricFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteQueryDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('success'),
            ], [
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRetentionPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSubscriptionFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTransformer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeAccountPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('scope'),
                        new \PHPStan\Type\Constant\ConstantStringType('selectionCriteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DATA_PROTECTION_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIPTION_FILTER_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FIELD_INDEX_POLICY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSFORMER_POLICY'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeConfigurationTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configurationTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('service'),
                        new \PHPStan\Type\Constant\ConstantStringType('logType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultDeliveryConfigValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowedFields'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowedOutputFormats'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowedActionForAllowVendedLogsDeliveryForResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowedFieldDelimiters'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowedSuffixPathFields'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('CWL'),
                            new \PHPStan\Type\Constant\ConstantStringType('FH'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('recordFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldDelimiter'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3DeliveryConfiguration'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('suffixPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('enableHiveCompatiblePath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('mandatory'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('json'),
                                new \PHPStan\Type\Constant\ConstantStringType('plain'),
                                new \PHPStan\Type\Constant\ConstantStringType('w3c'),
                                new \PHPStan\Type\Constant\ConstantStringType('raw'),
                                new \PHPStan\Type\Constant\ConstantStringType('parquet'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDeliveries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deliveries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('deliverySourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordFields'),
                        new \PHPStan\Type\Constant\ConstantStringType('fieldDelimiter'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3DeliveryConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('CWL'),
                            new \PHPStan\Type\Constant\ConstantStringType('FH'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('suffixPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('enableHiveCompatiblePath'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDeliveryDestinations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('CWL'),
                            new \PHPStan\Type\Constant\ConstantStringType('FH'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                            new \PHPStan\Type\Constant\ConstantStringType('plain'),
                            new \PHPStan\Type\Constant\ConstantStringType('w3c'),
                            new \PHPStan\Type\Constant\ConstantStringType('raw'),
                            new \PHPStan\Type\Constant\ConstantStringType('parquet'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('destinationResourceArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDeliverySources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deliverySources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('service'),
                        new \PHPStan\Type\Constant\ConstantStringType('logType'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDestinations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('destinations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destinationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('accessPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeExportTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('exportTasks'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskName'),
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('from'),
                        new \PHPStan\Type\Constant\ConstantStringType('to'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('destinationPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionInfo'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_CANCEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('completionTime'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeFieldIndexes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fieldIndexes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('fieldIndexName'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastScanTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstEventTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastEventTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeIndexPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('indexPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOG_GROUP'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLogGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('logGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('retentionInDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricFilterCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('storedBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataProtectionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('inheritedProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_DATA_PROTECTION'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFREQUENT_ACCESS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLogStreams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('logStreams'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logStreamName'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstEventTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastEventTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastIngestionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('uploadSequenceToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('storedBytes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMetricFilters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('metricFilters'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('filterPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricTransformations'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('applyOnTransformedLogs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('metricNamespace'),
                                new \PHPStan\Type\Constant\ConstantStringType('metricValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                                    new \PHPStan\Type\Constant\ConstantStringType('None'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeQueries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryLanguage'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CWLI'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PPL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Running'),
                            new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeQueryDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queryDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryLanguage'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryDefinitionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupNames'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CWLI'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PPL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeResourcePolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourcePolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSubscriptionFilters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionFilters'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('filterPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('distribution'),
                        new \PHPStan\Type\Constant\ConstantStringType('applyOnTransformedLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Random'),
                            new \PHPStan\Type\Constant\ConstantStringType('ByLogStream'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateKmsKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function filterLogEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('searchedLogStreams'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logStreamName'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ingestionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logStreamName'),
                        new \PHPStan\Type\Constant\ConstantStringType('searchedCompletely'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDataProtectionPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('logGroupIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getDelivery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('delivery'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deliverySourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('recordFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldDelimiter'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3DeliveryConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('CWL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FH'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('suffixPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableHiveCompatiblePath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getDeliveryDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deliveryDestination'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('CWL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('json'),
                        new \PHPStan\Type\Constant\ConstantStringType('plain'),
                        new \PHPStan\Type\Constant\ConstantStringType('w3c'),
                        new \PHPStan\Type\Constant\ConstantStringType('raw'),
                        new \PHPStan\Type\Constant\ConstantStringType('parquet'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destinationResourceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getDeliveryDestinationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationPolicy'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDeliverySource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deliverySource'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('service'),
                    new \PHPStan\Type\Constant\ConstantStringType('logType'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('integrationName'),
                new \PHPStan\Type\Constant\ConstantStringType('integrationType'),
                new \PHPStan\Type\Constant\ConstantStringType('integrationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('integrationDetails'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('openSearchIntegrationDetails'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('application'),
                        new \PHPStan\Type\Constant\ConstantStringType('collection'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspace'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('accessPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicy'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dataSourceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('applicationEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('applicationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('collectionEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('collectionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getLogAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detectorName'),
                new \PHPStan\Type\Constant\ConstantStringType('logGroupArnList'),
                new \PHPStan\Type\Constant\ConstantStringType('evaluationFrequency'),
                new \PHPStan\Type\Constant\ConstantStringType('filterPattern'),
                new \PHPStan\Type\Constant\ConstantStringType('anomalyDetectorStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimeStamp'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimeStamp'),
                new \PHPStan\Type\Constant\ConstantStringType('anomalyVisibilityTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONE_MIN'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIVE_MIN'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEN_MIN'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIFTEEN_MIN'),
                    new \PHPStan\Type\Constant\ConstantStringType('THIRTY_MIN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONE_HOUR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ANALYZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getLogEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('nextForwardToken'),
                new \PHPStan\Type\Constant\ConstantStringType('nextBackwardToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ingestionTime'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLogGroupFields(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('logGroupFields'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('percent'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getLogRecord(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('logRecord'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getQueryResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queryLanguage'),
                new \PHPStan\Type\Constant\ConstantStringType('results'),
                new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CWLI'),
                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PPL'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('field'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('recordsMatched'),
                    new \PHPStan\Type\Constant\ConstantStringType('recordsScanned'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedRecordsSkipped'),
                    new \PHPStan\Type\Constant\ConstantStringType('bytesScanned'),
                    new \PHPStan\Type\Constant\ConstantStringType('estimatedBytesSkipped'),
                    new \PHPStan\Type\Constant\ConstantStringType('logGroupsScanned'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Running'),
                    new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTransformer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('logGroupIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('transformerConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('addKeys'),
                        new \PHPStan\Type\Constant\ConstantStringType('copyValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('csv'),
                        new \PHPStan\Type\Constant\ConstantStringType('dateTimeConverter'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleteKeys'),
                        new \PHPStan\Type\Constant\ConstantStringType('grok'),
                        new \PHPStan\Type\Constant\ConstantStringType('listToMap'),
                        new \PHPStan\Type\Constant\ConstantStringType('lowerCaseString'),
                        new \PHPStan\Type\Constant\ConstantStringType('moveKeys'),
                        new \PHPStan\Type\Constant\ConstantStringType('parseCloudfront'),
                        new \PHPStan\Type\Constant\ConstantStringType('parseJSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('parseKeyValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('parseRoute53'),
                        new \PHPStan\Type\Constant\ConstantStringType('parsePostgres'),
                        new \PHPStan\Type\Constant\ConstantStringType('parseVPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('parseWAF'),
                        new \PHPStan\Type\Constant\ConstantStringType('renameKeys'),
                        new \PHPStan\Type\Constant\ConstantStringType('splitString'),
                        new \PHPStan\Type\Constant\ConstantStringType('substituteString'),
                        new \PHPStan\Type\Constant\ConstantStringType('trimString'),
                        new \PHPStan\Type\Constant\ConstantStringType('typeConverter'),
                        new \PHPStan\Type\Constant\ConstantStringType('upperCaseString'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overwriteIfExists'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overwriteIfExists'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('quoteCharacter'),
                            new \PHPStan\Type\Constant\ConstantStringType('delimiter'),
                            new \PHPStan\Type\Constant\ConstantStringType('columns'),
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('target'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('matchPatterns'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceTimezone'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetTimezone'),
                            new \PHPStan\Type\Constant\ConstantStringType('locale'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('withKeys'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('valueKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('target'),
                            new \PHPStan\Type\Constant\ConstantStringType('flatten'),
                            new \PHPStan\Type\Constant\ConstantStringType('flattenedElement'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('first'),
                                new \PHPStan\Type\Constant\ConstantStringType('last'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('withKeys'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overwriteIfExists'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                            new \PHPStan\Type\Constant\ConstantStringType('fieldDelimiter'),
                            new \PHPStan\Type\Constant\ConstantStringType('keyValueDelimiter'),
                            new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('nonMatchValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('overwriteIfExists'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('renameTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overwriteIfExists'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                                    new \PHPStan\Type\Constant\ConstantStringType('delimiter'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                                    new \PHPStan\Type\Constant\ConstantStringType('from'),
                                    new \PHPStan\Type\Constant\ConstantStringType('to'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('withKeys'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('boolean'),
                                        new \PHPStan\Type\Constant\ConstantStringType('integer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('double'),
                                        new \PHPStan\Type\Constant\ConstantStringType('string'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('withKeys'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listAnomalies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('anomalies'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('anomalyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('patternId'),
                        new \PHPStan\Type\Constant\ConstantStringType('anomalyDetectorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('patternString'),
                        new \PHPStan\Type\Constant\ConstantStringType('patternRegex'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstSeen'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSeen'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('active'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('histogram'),
                        new \PHPStan\Type\Constant\ConstantStringType('logSamples'),
                        new \PHPStan\Type\Constant\ConstantStringType('patternTokens'),
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupArnList'),
                        new \PHPStan\Type\Constant\ConstantStringType('suppressed'),
                        new \PHPStan\Type\Constant\ConstantStringType('suppressedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('suppressedUntil'),
                        new \PHPStan\Type\Constant\ConstantStringType('isPatternLevelSuppression'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Suppressed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Baseline'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dynamicTokenPosition'),
                                new \PHPStan\Type\Constant\ConstantStringType('isDynamic'),
                                new \PHPStan\Type\Constant\ConstantStringType('tokenString'),
                                new \PHPStan\Type\Constant\ConstantStringType('enumerations'),
                                new \PHPStan\Type\Constant\ConstantStringType('inferredTokenName'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIntegrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('integrationSummaries'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('integrationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('integrationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('integrationStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listLogAnomalyDetectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('anomalyDetectors'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('anomalyDetectorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupArnList'),
                        new \PHPStan\Type\Constant\ConstantStringType('evaluationFrequency'),
                        new \PHPStan\Type\Constant\ConstantStringType('filterPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('anomalyDetectorStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTimeStamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimeStamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('anomalyVisibilityTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_MIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('FIVE_MIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEN_MIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('FIFTEEN_MIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('THIRTY_MIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_HOUR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANALYZING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLogGroupsForQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('logGroupIdentifiers'),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listTagsLogGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function putAccountPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('scope'),
                    new \PHPStan\Type\Constant\ConstantStringType('selectionCriteria'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DATA_PROTECTION_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIPTION_FILTER_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FIELD_INDEX_POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSFORMER_POLICY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putDataProtectionPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('logGroupIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function putDeliveryDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deliveryDestination'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('CWL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('json'),
                        new \PHPStan\Type\Constant\ConstantStringType('plain'),
                        new \PHPStan\Type\Constant\ConstantStringType('w3c'),
                        new \PHPStan\Type\Constant\ConstantStringType('raw'),
                        new \PHPStan\Type\Constant\ConstantStringType('parquet'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destinationResourceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function putDeliveryDestinationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deliveryDestinationPolicy'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putDeliverySource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deliverySource'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('service'),
                    new \PHPStan\Type\Constant\ConstantStringType('logType'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function putDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('destination'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('destinationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function putDestinationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putIndexPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('indexPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('logGroupIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOG_GROUP'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('integrationName'),
                new \PHPStan\Type\Constant\ConstantStringType('integrationStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function putLogEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextSequenceToken'),
                new \PHPStan\Type\Constant\ConstantStringType('rejectedLogEventsInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('rejectedEntityInfo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('tooNewLogEventStartIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('tooOldLogEventEndIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('expiredLogEventEndIndex'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidEntity'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidTypeValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidKeyAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitySizeTooLarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnsupportedLogGroupType'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingRequiredFields'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putMetricFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putQueryDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queryDefinitionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourcePolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyDocument'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function putRetentionPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putSubscriptionFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putTransformer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startLiveTail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('responseStream'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sessionStart'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionUpdate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionTimeoutException'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionStreamingException'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('logGroupIdentifiers'),
                        new \PHPStan\Type\Constant\ConstantStringType('logStreamNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('logStreamNamePrefixes'),
                        new \PHPStan\Type\Constant\ConstantStringType('logEventFilterPattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sessionMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionResults'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sampled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('logStreamName'),
                                new \PHPStan\Type\Constant\ConstantStringType('logGroupIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('ingestionTime'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('success'),
            ], [
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function tagLogGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function testMetricFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('matches'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('extractedValues'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function testTransformer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('transformedLogs'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('transformedEventMessage'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function untagLogGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAnomaly(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateDeliveryConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLogAnomalyDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}