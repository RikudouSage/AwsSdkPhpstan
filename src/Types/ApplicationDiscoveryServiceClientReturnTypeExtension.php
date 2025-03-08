<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ApplicationDiscoveryServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateConfigurationItemsToApplication',
            'batchDeleteAgents',
            'batchDeleteImportData',
            'createApplication',
            'createTags',
            'deleteApplications',
            'deleteTags',
            'describeAgents',
            'describeBatchDeleteConfigurationTask',
            'describeConfigurations',
            'describeContinuousExports',
            'describeExportConfigurations',
            'describeExportTasks',
            'describeImportTasks',
            'describeTags',
            'disassociateConfigurationItemsFromApplication',
            'exportConfigurations',
            'getDiscoverySummary',
            'listConfigurations',
            'listServerNeighbors',
            'startBatchDeleteConfigurationTask',
            'startContinuousExport',
            'startDataCollectionByAgentIds',
            'startExportTask',
            'startImportTask',
            'stopContinuousExport',
            'stopDataCollectionByAgentIds',
            'updateApplication',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateConfigurationItemsToApplication' => $this->associateConfigurationItemsToApplication(),
            'batchDeleteAgents' => $this->batchDeleteAgents(),
            'batchDeleteImportData' => $this->batchDeleteImportData(),
            'createApplication' => $this->createApplication(),
            'createTags' => $this->createTags(),
            'deleteApplications' => $this->deleteApplications(),
            'deleteTags' => $this->deleteTags(),
            'describeAgents' => $this->describeAgents(),
            'describeBatchDeleteConfigurationTask' => $this->describeBatchDeleteConfigurationTask(),
            'describeConfigurations' => $this->describeConfigurations(),
            'describeContinuousExports' => $this->describeContinuousExports(),
            'describeExportConfigurations' => $this->describeExportConfigurations(),
            'describeExportTasks' => $this->describeExportTasks(),
            'describeImportTasks' => $this->describeImportTasks(),
            'describeTags' => $this->describeTags(),
            'disassociateConfigurationItemsFromApplication' => $this->disassociateConfigurationItemsFromApplication(),
            'exportConfigurations' => $this->exportConfigurations(),
            'getDiscoverySummary' => $this->getDiscoverySummary(),
            'listConfigurations' => $this->listConfigurations(),
            'listServerNeighbors' => $this->listServerNeighbors(),
            'startBatchDeleteConfigurationTask' => $this->startBatchDeleteConfigurationTask(),
            'startContinuousExport' => $this->startContinuousExport(),
            'startDataCollectionByAgentIds' => $this->startDataCollectionByAgentIds(),
            'startExportTask' => $this->startExportTask(),
            'startImportTask' => $this->startImportTask(),
            'stopContinuousExport' => $this->stopContinuousExport(),
            'stopDataCollectionByAgentIds' => $this->stopDataCollectionByAgentIds(),
            'updateApplication' => $this->updateApplication(),
        };
    }
    private function associateConfigurationItemsToApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function batchDeleteAgents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_IN_USE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function batchDeleteImportData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('importTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('OVER_LIMIT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configurationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAgents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentsInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentNetworkInfoList'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastHealthPingTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('collectionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('BLACKLISTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHUTDOWN'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeBatchDeleteConfigurationTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('task'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('deletedConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('failedConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('deletionWarnings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('SERVER'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorStatusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('warningCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('warningText'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configurations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeContinuousExports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('descriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('exportId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaStorageConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeExportConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('exportsInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('exportId'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationsDownloadUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportRequestTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('isTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedEndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeExportTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('exportsInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('exportId'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationsDownloadUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportRequestTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('isTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedEndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeImportTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('tasks'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('importTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('importUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('importRequestTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('importCompletionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('importDeletedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileClassification'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverImportSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverImportFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationImportSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationImportFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorsAndFailedEntriesZip'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_COMPLETE_WITH_ERRORS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED_SERVER_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED_RECORD_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED_UNSUPPORTED_FILE_TYPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODELIZEIT_EXPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RVTOOLS_EXPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('VMWARE_NSX_EXPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_TEMPLATE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('configurationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeOfCreation'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateConfigurationItemsFromApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function exportConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('exportId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDiscoverySummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('servers'),
                new \PHPStan\Type\Constant\ConstantStringType('applications'),
                new \PHPStan\Type\Constant\ConstantStringType('serversMappedToApplications'),
                new \PHPStan\Type\Constant\ConstantStringType('serversMappedtoTags'),
                new \PHPStan\Type\Constant\ConstantStringType('agentSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('meCollectorSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('agentlessCollectorSummary'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('activeAgents'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthyAgents'),
                    new \PHPStan\Type\Constant\ConstantStringType('blackListedAgents'),
                    new \PHPStan\Type\Constant\ConstantStringType('shutdownAgents'),
                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyAgents'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalAgents'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknownAgents'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('activeConnectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthyConnectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('blackListedConnectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('shutdownConnectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyConnectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalConnectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknownConnectors'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('activeMeCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthyMeCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('denyListedMeCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('shutdownMeCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyMeCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalMeCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknownMeCollectors'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('activeAgentlessCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthyAgentlessCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('denyListedAgentlessCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('shutdownAgentlessCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyAgentlessCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalAgentlessCollectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknownAgentlessCollectors'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function listConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configurations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServerNeighbors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('neighbors'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('knownDependencyCount'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sourceServerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationServerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('transportProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionsCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function startBatchDeleteConfigurationTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startContinuousExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('exportId'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('schemaStorageConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function startDataCollectionByAgentIds(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentsConfigurationStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('operationSucceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startExportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('exportId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startImportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('task'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('importTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('importUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('importRequestTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('importCompletionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('importDeletedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileClassification'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverImportSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverImportFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationImportSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationImportFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorsAndFailedEntriesZip'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_COMPLETE_WITH_ERRORS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED_SERVER_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED_RECORD_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED_UNSUPPORTED_FILE_TYPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODELIZEIT_EXPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RVTOOLS_EXPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('VMWARE_NSX_EXPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_TEMPLATE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function stopContinuousExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('stopTime'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function stopDataCollectionByAgentIds(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentsConfigurationStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('operationSucceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}