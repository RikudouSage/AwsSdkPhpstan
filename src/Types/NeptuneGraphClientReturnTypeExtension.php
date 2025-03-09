<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class NeptuneGraphClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\NeptuneGraph\NeptuneGraphClient>
     */
    public function getClass(): string
    {
        return \Aws\NeptuneGraph\NeptuneGraphClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelExportTask',
            'cancelImportTask',
            'cancelQuery',
            'createGraph',
            'createGraphSnapshot',
            'createGraphUsingImportTask',
            'createPrivateGraphEndpoint',
            'deleteGraph',
            'deleteGraphSnapshot',
            'deletePrivateGraphEndpoint',
            'executeQuery',
            'getExportTask',
            'getGraph',
            'getGraphSnapshot',
            'getGraphSummary',
            'getImportTask',
            'getPrivateGraphEndpoint',
            'getQuery',
            'listExportTasks',
            'listGraphSnapshots',
            'listGraphs',
            'listImportTasks',
            'listPrivateGraphEndpoints',
            'listQueries',
            'listTagsForResource',
            'resetGraph',
            'restoreGraphFromSnapshot',
            'startExportTask',
            'startImportTask',
            'tagResource',
            'untagResource',
            'updateGraph',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelExportTask' => $this->cancelExportTask(),
            'cancelImportTask' => $this->cancelImportTask(),
            'cancelQuery' => $this->cancelQuery(),
            'createGraph' => $this->createGraph(),
            'createGraphSnapshot' => $this->createGraphSnapshot(),
            'createGraphUsingImportTask' => $this->createGraphUsingImportTask(),
            'createPrivateGraphEndpoint' => $this->createPrivateGraphEndpoint(),
            'deleteGraph' => $this->deleteGraph(),
            'deleteGraphSnapshot' => $this->deleteGraphSnapshot(),
            'deletePrivateGraphEndpoint' => $this->deletePrivateGraphEndpoint(),
            'executeQuery' => $this->executeQuery(),
            'getExportTask' => $this->getExportTask(),
            'getGraph' => $this->getGraph(),
            'getGraphSnapshot' => $this->getGraphSnapshot(),
            'getGraphSummary' => $this->getGraphSummary(),
            'getImportTask' => $this->getImportTask(),
            'getPrivateGraphEndpoint' => $this->getPrivateGraphEndpoint(),
            'getQuery' => $this->getQuery(),
            'listExportTasks' => $this->listExportTasks(),
            'listGraphSnapshots' => $this->listGraphSnapshots(),
            'listGraphs' => $this->listGraphs(),
            'listImportTasks' => $this->listImportTasks(),
            'listPrivateGraphEndpoints' => $this->listPrivateGraphEndpoints(),
            'listQueries' => $this->listQueries(),
            'listTagsForResource' => $this->listTagsForResource(),
            'resetGraph' => $this->resetGraph(),
            'restoreGraphFromSnapshot' => $this->restoreGraphFromSnapshot(),
            'startExportTask' => $this->startExportTask(),
            'startImportTask' => $this->startImportTask(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateGraph' => $this->updateGraph(),
        };
    }
    private function cancelExportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphId'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('parquetType'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('COLUMNAR'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelImportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphId'),
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                new \PHPStan\Type\Constant\ConstantStringType('source'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('parquetType'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPEN_CYPHER'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                    new \PHPStan\Type\Constant\ConstantStringType('NTRIPLES'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('COLUMNAR'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ANALYZING_DATA'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
            ]),
        ]);
    }
    private function cancelQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createGraph(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedMemory'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('publicConnectivity'),
                new \PHPStan\Type\Constant\ConstantStringType('vectorSearchConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('replicaCount'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceSnapshotId'),
                new \PHPStan\Type\Constant\ConstantStringType('deletionProtection'),
                new \PHPStan\Type\Constant\ConstantStringType('buildNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESETTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dimension'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createGraphSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceGraphId'),
                new \PHPStan\Type\Constant\ConstantStringType('snapshotCreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createGraphUsingImportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphId'),
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                new \PHPStan\Type\Constant\ConstantStringType('source'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('parquetType'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('importOptions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPEN_CYPHER'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                    new \PHPStan\Type\Constant\ConstantStringType('NTRIPLES'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('COLUMNAR'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ANALYZING_DATA'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('neptune'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3ExportPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3ExportKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('preserveDefaultVertexLabels'),
                        new \PHPStan\Type\Constant\ConstantStringType('preserveEdgeIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createPrivateGraphEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteGraph(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedMemory'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('publicConnectivity'),
                new \PHPStan\Type\Constant\ConstantStringType('vectorSearchConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('replicaCount'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceSnapshotId'),
                new \PHPStan\Type\Constant\ConstantStringType('deletionProtection'),
                new \PHPStan\Type\Constant\ConstantStringType('buildNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESETTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dimension'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteGraphSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceGraphId'),
                new \PHPStan\Type\Constant\ConstantStringType('snapshotCreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deletePrivateGraphEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function executeQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getExportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphId'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('parquetType'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('exportTaskDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('exportFilter'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('COLUMNAR'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeElapsedSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('numVerticesWritten'),
                    new \PHPStan\Type\Constant\ConstantStringType('numEdgesWritten'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('vertexFilter'),
                    new \PHPStan\Type\Constant\ConstantStringType('edgeFilter'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('outputType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourcePropertyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('multiValueHandling'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TO_LIST'),
                                new \PHPStan\Type\Constant\ConstantStringType('PICK_FIRST'),
                            ]),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('outputType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourcePropertyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('multiValueHandling'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TO_LIST'),
                                new \PHPStan\Type\Constant\ConstantStringType('PICK_FIRST'),
                            ]),
                        ])),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getGraph(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedMemory'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('publicConnectivity'),
                new \PHPStan\Type\Constant\ConstantStringType('vectorSearchConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('replicaCount'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceSnapshotId'),
                new \PHPStan\Type\Constant\ConstantStringType('deletionProtection'),
                new \PHPStan\Type\Constant\ConstantStringType('buildNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESETTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dimension'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getGraphSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceGraphId'),
                new \PHPStan\Type\Constant\ConstantStringType('snapshotCreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getGraphSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('lastStatisticsComputationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('graphSummary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('numNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('numEdges'),
                    new \PHPStan\Type\Constant\ConstantStringType('numNodeLabels'),
                    new \PHPStan\Type\Constant\ConstantStringType('numEdgeLabels'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeLabels'),
                    new \PHPStan\Type\Constant\ConstantStringType('edgeLabels'),
                    new \PHPStan\Type\Constant\ConstantStringType('numNodeProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('numEdgeProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('edgeProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalNodePropertyValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalEdgePropertyValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeStructures'),
                    new \PHPStan\Type\Constant\ConstantStringType('edgeStructures'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodeProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('distinctOutgoingEdgeLabels'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('count'),
                            new \PHPStan\Type\Constant\ConstantStringType('edgeProperties'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getImportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphId'),
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                new \PHPStan\Type\Constant\ConstantStringType('source'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('parquetType'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('importOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('importTaskDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('attemptNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPEN_CYPHER'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                    new \PHPStan\Type\Constant\ConstantStringType('NTRIPLES'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('COLUMNAR'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ANALYZING_DATA'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('neptune'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3ExportPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3ExportKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('preserveDefaultVertexLabels'),
                        new \PHPStan\Type\Constant\ConstantStringType('preserveEdgeIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeElapsedSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('statementCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('dictionaryEntryCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPrivateGraphEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                new \PHPStan\Type\Constant\ConstantStringType('waited'),
                new \PHPStan\Type\Constant\ConstantStringType('elapsed'),
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                ]),
            ]),
        ]);
    }
    private function listExportTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('graphId'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('format'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('parquetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPORTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('COLUMNAR'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGraphSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphSnapshots'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceGraphId'),
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGraphs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('provisionedMemory'),
                        new \PHPStan\Type\Constant\ConstantStringType('publicConnectivity'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicaCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('deletionProtection'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESETTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImportTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('graphId'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('format'),
                        new \PHPStan\Type\Constant\ConstantStringType('parquetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPEN_CYPHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                            new \PHPStan\Type\Constant\ConstantStringType('NTRIPLES'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('COLUMNAR'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPORTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANALYZING_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPrivateGraphEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('privateGraphEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQueries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queries'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                        new \PHPStan\Type\Constant\ConstantStringType('waited'),
                        new \PHPStan\Type\Constant\ConstantStringType('elapsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        ]),
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
    private function resetGraph(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedMemory'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('publicConnectivity'),
                new \PHPStan\Type\Constant\ConstantStringType('vectorSearchConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('replicaCount'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceSnapshotId'),
                new \PHPStan\Type\Constant\ConstantStringType('deletionProtection'),
                new \PHPStan\Type\Constant\ConstantStringType('buildNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESETTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dimension'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function restoreGraphFromSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedMemory'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('publicConnectivity'),
                new \PHPStan\Type\Constant\ConstantStringType('vectorSearchConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('replicaCount'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceSnapshotId'),
                new \PHPStan\Type\Constant\ConstantStringType('deletionProtection'),
                new \PHPStan\Type\Constant\ConstantStringType('buildNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESETTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dimension'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startExportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphId'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('parquetType'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('exportFilter'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('COLUMNAR'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('vertexFilter'),
                    new \PHPStan\Type\Constant\ConstantStringType('edgeFilter'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('outputType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourcePropertyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('multiValueHandling'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TO_LIST'),
                                new \PHPStan\Type\Constant\ConstantStringType('PICK_FIRST'),
                            ]),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('outputType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourcePropertyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('multiValueHandling'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TO_LIST'),
                                new \PHPStan\Type\Constant\ConstantStringType('PICK_FIRST'),
                            ]),
                        ])),
                    ])),
                ]),
            ]),
        ]);
    }
    private function startImportTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphId'),
                new \PHPStan\Type\Constant\ConstantStringType('taskId'),
                new \PHPStan\Type\Constant\ConstantStringType('source'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('parquetType'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('importOptions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPEN_CYPHER'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                    new \PHPStan\Type\Constant\ConstantStringType('NTRIPLES'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('COLUMNAR'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ANALYZING_DATA'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('neptune'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3ExportPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3ExportKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('preserveDefaultVertexLabels'),
                        new \PHPStan\Type\Constant\ConstantStringType('preserveEdgeIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
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
    private function updateGraph(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedMemory'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('publicConnectivity'),
                new \PHPStan\Type\Constant\ConstantStringType('vectorSearchConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('replicaCount'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceSnapshotId'),
                new \PHPStan\Type\Constant\ConstantStringType('deletionProtection'),
                new \PHPStan\Type\Constant\ConstantStringType('buildNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESETTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dimension'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}