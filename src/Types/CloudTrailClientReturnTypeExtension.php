<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CloudTrailClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CloudTrail\CloudTrailClient>
     */
    public function getClass(): string
    {
        return \Aws\CloudTrail\CloudTrailClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addTags',
            'cancelQuery',
            'createChannel',
            'createDashboard',
            'createEventDataStore',
            'createTrail',
            'deleteChannel',
            'deleteDashboard',
            'deleteEventDataStore',
            'deleteResourcePolicy',
            'deleteTrail',
            'deregisterOrganizationDelegatedAdmin',
            'describeQuery',
            'describeTrails',
            'disableFederation',
            'enableFederation',
            'generateQuery',
            'getChannel',
            'getDashboard',
            'getEventDataStore',
            'getEventSelectors',
            'getImport',
            'getInsightSelectors',
            'getQueryResults',
            'getResourcePolicy',
            'getTrail',
            'getTrailStatus',
            'listChannels',
            'listDashboards',
            'listEventDataStores',
            'listImportFailures',
            'listImports',
            'listInsightsMetricData',
            'listPublicKeys',
            'listQueries',
            'listTags',
            'listTrails',
            'lookupEvents',
            'putEventSelectors',
            'putInsightSelectors',
            'putResourcePolicy',
            'registerOrganizationDelegatedAdmin',
            'removeTags',
            'restoreEventDataStore',
            'searchSampleQueries',
            'startDashboardRefresh',
            'startEventDataStoreIngestion',
            'startImport',
            'startLogging',
            'startQuery',
            'stopEventDataStoreIngestion',
            'stopImport',
            'stopLogging',
            'updateChannel',
            'updateDashboard',
            'updateEventDataStore',
            'updateTrail',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addTags' => $this->addTags(),
            'cancelQuery' => $this->cancelQuery(),
            'createChannel' => $this->createChannel(),
            'createDashboard' => $this->createDashboard(),
            'createEventDataStore' => $this->createEventDataStore(),
            'createTrail' => $this->createTrail(),
            'deleteChannel' => $this->deleteChannel(),
            'deleteDashboard' => $this->deleteDashboard(),
            'deleteEventDataStore' => $this->deleteEventDataStore(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteTrail' => $this->deleteTrail(),
            'deregisterOrganizationDelegatedAdmin' => $this->deregisterOrganizationDelegatedAdmin(),
            'describeQuery' => $this->describeQuery(),
            'describeTrails' => $this->describeTrails(),
            'disableFederation' => $this->disableFederation(),
            'enableFederation' => $this->enableFederation(),
            'generateQuery' => $this->generateQuery(),
            'getChannel' => $this->getChannel(),
            'getDashboard' => $this->getDashboard(),
            'getEventDataStore' => $this->getEventDataStore(),
            'getEventSelectors' => $this->getEventSelectors(),
            'getImport' => $this->getImport(),
            'getInsightSelectors' => $this->getInsightSelectors(),
            'getQueryResults' => $this->getQueryResults(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'getTrail' => $this->getTrail(),
            'getTrailStatus' => $this->getTrailStatus(),
            'listChannels' => $this->listChannels(),
            'listDashboards' => $this->listDashboards(),
            'listEventDataStores' => $this->listEventDataStores(),
            'listImportFailures' => $this->listImportFailures(),
            'listImports' => $this->listImports(),
            'listInsightsMetricData' => $this->listInsightsMetricData(),
            'listPublicKeys' => $this->listPublicKeys(),
            'listQueries' => $this->listQueries(),
            'listTags' => $this->listTags(),
            'listTrails' => $this->listTrails(),
            'lookupEvents' => $this->lookupEvents(),
            'putEventSelectors' => $this->putEventSelectors(),
            'putInsightSelectors' => $this->putInsightSelectors(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'registerOrganizationDelegatedAdmin' => $this->registerOrganizationDelegatedAdmin(),
            'removeTags' => $this->removeTags(),
            'restoreEventDataStore' => $this->restoreEventDataStore(),
            'searchSampleQueries' => $this->searchSampleQueries(),
            'startDashboardRefresh' => $this->startDashboardRefresh(),
            'startEventDataStoreIngestion' => $this->startEventDataStoreIngestion(),
            'startImport' => $this->startImport(),
            'startLogging' => $this->startLogging(),
            'startQuery' => $this->startQuery(),
            'stopEventDataStoreIngestion' => $this->stopEventDataStoreIngestion(),
            'stopImport' => $this->stopImport(),
            'stopLogging' => $this->stopLogging(),
            'updateChannel' => $this->updateChannel(),
            'updateDashboard' => $this->updateDashboard(),
            'updateEventDataStore' => $this->updateEventDataStore(),
            'updateTrail' => $this->updateTrail(),
        };
    }
    private function addTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreOwnerAccountId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FINISHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Source'),
                new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT_DATA_STORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SERVICE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createDashboard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DashboardArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('Widgets'),
                new \PHPStan\Type\Constant\ConstantStringType('TagsList'),
                new \PHPStan\Type\Constant\ConstantStringType('RefreshSchedule'),
                new \PHPStan\Type\Constant\ConstantStringType('TerminationProtectionEnabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QueryAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryStatement'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ViewProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Frequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeOfDay'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createEventDataStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('AdvancedEventSelectors'),
                new \PHPStan\Type\Constant\ConstantStringType('MultiRegionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('TerminationProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('TagsList'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING_INGESTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING_INGESTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED_INGESTION'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldSelectors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Field'),
                        new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEndsWith'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EXTENDABLE_RETENTION_PRICING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIXED_RETENTION_PRICING'),
                ]),
            ]),
        ]);
    }
    private function createTrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicName'),
                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicARN'),
                new \PHPStan\Type\Constant\ConstantStringType('IncludeGlobalServiceEvents'),
                new \PHPStan\Type\Constant\ConstantStringType('IsMultiRegionTrail'),
                new \PHPStan\Type\Constant\ConstantStringType('TrailARN'),
                new \PHPStan\Type\Constant\ConstantStringType('LogFileValidationEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('IsOrganizationTrail'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function deleteChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDashboard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEventDataStore(): ?\PHPStan\Type\Type
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
    private function deleteTrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterOrganizationDelegatedAdmin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('DeliveryS3Uri'),
                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Prompt'),
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreOwnerAccountId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FINISHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventsMatched'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventsScanned'),
                    new \PHPStan\Type\Constant\ConstantStringType('BytesScanned'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionTimeInMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_SIGNING_FILE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_SIGNING_FILE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTrails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('trailList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeGlobalServiceEvents'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsMultiRegionTrail'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrailARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogFileValidationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasCustomEventSelectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasInsightSelectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsOrganizationTrail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function disableFederation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FederationStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function enableFederation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FederationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('FederationRoleArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function generateQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryStatement'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreOwnerAccountId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Source'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                new \PHPStan\Type\Constant\ConstantStringType('IngestionStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplyToAllRegions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedEventSelectors'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('FieldSelectors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Field'),
                            new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartsWith'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndsWith'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotStartsWith'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotEndsWith'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT_DATA_STORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SERVICE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LatestIngestionSuccessTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestIngestionSuccessEventID'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestIngestionErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestIngestionAttemptTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestIngestionAttemptEventID'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDashboard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DashboardArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Widgets'),
                new \PHPStan\Type\Constant\ConstantStringType('RefreshSchedule'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('LastRefreshId'),
                new \PHPStan\Type\Constant\ConstantStringType('LastRefreshFailureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('TerminationProtectionEnabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QueryAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryStatement'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ViewProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Frequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeOfDay'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getEventDataStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('AdvancedEventSelectors'),
                new \PHPStan\Type\Constant\ConstantStringType('MultiRegionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('TerminationProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                new \PHPStan\Type\Constant\ConstantStringType('FederationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('FederationRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PartitionKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING_INGESTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING_INGESTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED_INGESTION'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldSelectors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Field'),
                        new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEndsWith'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EXTENDABLE_RETENTION_PRICING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIXED_RETENTION_PRICING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getEventSelectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrailARN'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSelectors'),
                new \PHPStan\Type\Constant\ConstantStringType('AdvancedEventSelectors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReadWriteType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeManagementEvents'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExcludeManagementEventSources'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadOnly'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteOnly'),
                        new \PHPStan\Type\Constant\ConstantStringType('All'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldSelectors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Field'),
                        new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEndsWith'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
            ]),
        ]);
    }
    private function getImport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImportId'),
                new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportSource'),
                new \PHPStan\Type\Constant\ConstantStringType('StartEventTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndEventTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportStatistics'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3LocationUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketAccessRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PrefixesFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrefixesCompleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('FilesCompleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventsCompleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedEntries'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getInsightSelectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrailARN'),
                new \PHPStan\Type\Constant\ConstantStringType('InsightSelectors'),
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreArn'),
                new \PHPStan\Type\Constant\ConstantStringType('InsightsDestination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InsightType'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApiCallRateInsight'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiErrorRateInsight'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getQueryResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryResultRows'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FINISHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResultsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalResultsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('BytesScanned'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()))),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('DelegatedAdminResourcePolicy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Trail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeGlobalServiceEvents'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsMultiRegionTrail'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrailARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogFileValidationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasCustomEventSelectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasInsightSelectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsOrganizationTrail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getTrailStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IsLogging'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestDeliveryError'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestNotificationError'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestDeliveryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestNotificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('StartLoggingTime'),
                new \PHPStan\Type\Constant\ConstantStringType('StopLoggingTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestCloudWatchLogsDeliveryError'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestCloudWatchLogsDeliveryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestDigestDeliveryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestDigestDeliveryError'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestDeliveryAttemptTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestNotificationAttemptTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestNotificationAttemptSucceeded'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestDeliveryAttemptSucceeded'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeLoggingStarted'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeLoggingStopped'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function listChannels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Channels'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDashboards(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Dashboards'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DashboardArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEventDataStores(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStores'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('TerminationProtectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedEventSelectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING_INGESTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING_INGESTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED_INGESTION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('FieldSelectors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Field'),
                            new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartsWith'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndsWith'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotStartsWith'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotEndsWith'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImportFailures(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Failures'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Imports'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ImportId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInsightsMetricData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventSource'),
                new \PHPStan\Type\Constant\ConstantStringType('EventName'),
                new \PHPStan\Type\Constant\ConstantStringType('InsightType'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                new \PHPStan\Type\Constant\ConstantStringType('Timestamps'),
                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApiCallRateInsight'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApiErrorRateInsight'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ObjectType('DateTimeInterface')),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPublicKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublicKeyList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidityStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidityEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fingerprint'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQueries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Queries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FINISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTagList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagsList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTrails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Trails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TrailARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function lookupEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Events'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadOnly'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudTrailEvent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putEventSelectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrailARN'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSelectors'),
                new \PHPStan\Type\Constant\ConstantStringType('AdvancedEventSelectors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReadWriteType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeManagementEvents'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExcludeManagementEventSources'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadOnly'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteOnly'),
                        new \PHPStan\Type\Constant\ConstantStringType('All'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldSelectors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Field'),
                        new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEndsWith'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
            ]),
        ]);
    }
    private function putInsightSelectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrailARN'),
                new \PHPStan\Type\Constant\ConstantStringType('InsightSelectors'),
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreArn'),
                new \PHPStan\Type\Constant\ConstantStringType('InsightsDestination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InsightType'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApiCallRateInsight'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiErrorRateInsight'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('DelegatedAdminResourcePolicy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerOrganizationDelegatedAdmin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function restoreEventDataStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('AdvancedEventSelectors'),
                new \PHPStan\Type\Constant\ConstantStringType('MultiRegionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('TerminationProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING_INGESTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING_INGESTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED_INGESTION'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldSelectors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Field'),
                        new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEndsWith'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EXTENDABLE_RETENTION_PRICING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIXED_RETENTION_PRICING'),
                ]),
            ]),
        ]);
    }
    private function searchSampleQueries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SearchResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                    new \PHPStan\Type\Constant\ConstantStringType('Relevance'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDashboardRefresh(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RefreshId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startEventDataStoreIngestion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startImport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImportId'),
                new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportSource'),
                new \PHPStan\Type\Constant\ConstantStringType('StartEventTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndEventTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3LocationUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketAccessRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function startLogging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreOwnerAccountId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopEventDataStoreIngestion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopImport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImportId'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportSource'),
                new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('StartEventTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndEventTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportStatistics'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3LocationUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketAccessRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PrefixesFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrefixesCompleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('FilesCompleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventsCompleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedEntries'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function stopLogging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Source'),
                new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT_DATA_STORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SERVICE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateDashboard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DashboardArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('Widgets'),
                new \PHPStan\Type\Constant\ConstantStringType('RefreshSchedule'),
                new \PHPStan\Type\Constant\ConstantStringType('TerminationProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QueryAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryStatement'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ViewProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Frequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeOfDay'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateEventDataStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventDataStoreArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('AdvancedEventSelectors'),
                new \PHPStan\Type\Constant\ConstantStringType('MultiRegionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('TerminationProtectionEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('BillingMode'),
                new \PHPStan\Type\Constant\ConstantStringType('FederationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('FederationRoleArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING_INGESTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING_INGESTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED_INGESTION'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldSelectors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Field'),
                        new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEquals'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStartsWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotEndsWith'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EXTENDABLE_RETENTION_PRICING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIXED_RETENTION_PRICING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateTrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicName'),
                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicARN'),
                new \PHPStan\Type\Constant\ConstantStringType('IncludeGlobalServiceEvents'),
                new \PHPStan\Type\Constant\ConstantStringType('IsMultiRegionTrail'),
                new \PHPStan\Type\Constant\ConstantStringType('TrailARN'),
                new \PHPStan\Type\Constant\ConstantStringType('LogFileValidationEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('IsOrganizationTrail'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
}