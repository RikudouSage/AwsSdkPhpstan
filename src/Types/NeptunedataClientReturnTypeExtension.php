<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class NeptunedataClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Neptunedata\NeptunedataClient>
     */
    public function getClass(): string
    {
        return \Aws\Neptunedata\NeptunedataClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelGremlinQuery',
            'cancelLoaderJob',
            'cancelMLDataProcessingJob',
            'cancelMLModelTrainingJob',
            'cancelMLModelTransformJob',
            'cancelOpenCypherQuery',
            'createMLEndpoint',
            'deleteMLEndpoint',
            'deletePropertygraphStatistics',
            'deleteSparqlStatistics',
            'executeFastReset',
            'executeGremlinExplainQuery',
            'executeGremlinProfileQuery',
            'executeGremlinQuery',
            'executeOpenCypherExplainQuery',
            'executeOpenCypherQuery',
            'getEngineStatus',
            'getGremlinQueryStatus',
            'getLoaderJobStatus',
            'getMLDataProcessingJob',
            'getMLEndpoint',
            'getMLModelTrainingJob',
            'getMLModelTransformJob',
            'getOpenCypherQueryStatus',
            'getPropertygraphStatistics',
            'getPropertygraphStream',
            'getPropertygraphSummary',
            'getRDFGraphSummary',
            'getSparqlStatistics',
            'getSparqlStream',
            'listGremlinQueries',
            'listLoaderJobs',
            'listMLDataProcessingJobs',
            'listMLEndpoints',
            'listMLModelTrainingJobs',
            'listMLModelTransformJobs',
            'listOpenCypherQueries',
            'managePropertygraphStatistics',
            'manageSparqlStatistics',
            'startLoaderJob',
            'startMLDataProcessingJob',
            'startMLModelTrainingJob',
            'startMLModelTransformJob',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelGremlinQuery' => $this->cancelGremlinQuery(),
            'cancelLoaderJob' => $this->cancelLoaderJob(),
            'cancelMLDataProcessingJob' => $this->cancelMLDataProcessingJob(),
            'cancelMLModelTrainingJob' => $this->cancelMLModelTrainingJob(),
            'cancelMLModelTransformJob' => $this->cancelMLModelTransformJob(),
            'cancelOpenCypherQuery' => $this->cancelOpenCypherQuery(),
            'createMLEndpoint' => $this->createMLEndpoint(),
            'deleteMLEndpoint' => $this->deleteMLEndpoint(),
            'deletePropertygraphStatistics' => $this->deletePropertygraphStatistics(),
            'deleteSparqlStatistics' => $this->deleteSparqlStatistics(),
            'executeFastReset' => $this->executeFastReset(),
            'executeGremlinExplainQuery' => $this->executeGremlinExplainQuery(),
            'executeGremlinProfileQuery' => $this->executeGremlinProfileQuery(),
            'executeGremlinQuery' => $this->executeGremlinQuery(),
            'executeOpenCypherExplainQuery' => $this->executeOpenCypherExplainQuery(),
            'executeOpenCypherQuery' => $this->executeOpenCypherQuery(),
            'getEngineStatus' => $this->getEngineStatus(),
            'getGremlinQueryStatus' => $this->getGremlinQueryStatus(),
            'getLoaderJobStatus' => $this->getLoaderJobStatus(),
            'getMLDataProcessingJob' => $this->getMLDataProcessingJob(),
            'getMLEndpoint' => $this->getMLEndpoint(),
            'getMLModelTrainingJob' => $this->getMLModelTrainingJob(),
            'getMLModelTransformJob' => $this->getMLModelTransformJob(),
            'getOpenCypherQueryStatus' => $this->getOpenCypherQueryStatus(),
            'getPropertygraphStatistics' => $this->getPropertygraphStatistics(),
            'getPropertygraphStream' => $this->getPropertygraphStream(),
            'getPropertygraphSummary' => $this->getPropertygraphSummary(),
            'getRDFGraphSummary' => $this->getRDFGraphSummary(),
            'getSparqlStatistics' => $this->getSparqlStatistics(),
            'getSparqlStream' => $this->getSparqlStream(),
            'listGremlinQueries' => $this->listGremlinQueries(),
            'listLoaderJobs' => $this->listLoaderJobs(),
            'listMLDataProcessingJobs' => $this->listMLDataProcessingJobs(),
            'listMLEndpoints' => $this->listMLEndpoints(),
            'listMLModelTrainingJobs' => $this->listMLModelTrainingJobs(),
            'listMLModelTransformJobs' => $this->listMLModelTransformJobs(),
            'listOpenCypherQueries' => $this->listOpenCypherQueries(),
            'managePropertygraphStatistics' => $this->managePropertygraphStatistics(),
            'manageSparqlStatistics' => $this->manageSparqlStatistics(),
            'startLoaderJob' => $this->startLoaderJob(),
            'startMLDataProcessingJob' => $this->startMLDataProcessingJob(),
            'startMLModelTrainingJob' => $this->startMLModelTrainingJob(),
            'startMLModelTransformJob' => $this->startMLModelTransformJob(),
        };
    }
    private function cancelGremlinQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelLoaderJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelMLDataProcessingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelMLModelTrainingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelMLModelTransformJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelOpenCypherQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createMLEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimeInMillis'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteMLEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deletePropertygraphStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                    new \PHPStan\Type\Constant\ConstantStringType('statisticsId'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteSparqlStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                    new \PHPStan\Type\Constant\ConstantStringType('statisticsId'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function executeFastReset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('token'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function executeGremlinExplainQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('output'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function executeGremlinProfileQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('output'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function executeGremlinQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('result'),
                new \PHPStan\Type\Constant\ConstantStringType('meta'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
            ]),
        ]);
    }
    private function executeOpenCypherExplainQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('results'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function executeOpenCypherQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('results'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
            ]),
        ]);
    }
    private function getEngineStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('dbEngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('role'),
                new \PHPStan\Type\Constant\ConstantStringType('dfeQueryEngine'),
                new \PHPStan\Type\Constant\ConstantStringType('gremlin'),
                new \PHPStan\Type\Constant\ConstantStringType('sparql'),
                new \PHPStan\Type\Constant\ConstantStringType('opencypher'),
                new \PHPStan\Type\Constant\ConstantStringType('labMode'),
                new \PHPStan\Type\Constant\ConstantStringType('rollingBackTrxCount'),
                new \PHPStan\Type\Constant\ConstantStringType('rollingBackTrxEarliestStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('features'),
                new \PHPStan\Type\Constant\ConstantStringType('settings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getGremlinQueryStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queryId'),
                new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                new \PHPStan\Type\Constant\ConstantStringType('queryEvalStats'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('waited'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsed'),
                    new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                    new \PHPStan\Type\Constant\ConstantStringType('subqueries'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                ]),
            ]),
        ]);
    }
    private function getLoaderJobStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
            ]),
        ]);
    }
    private function getMLDataProcessingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('processingJob'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudwatchLogUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getMLEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('endpointConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudwatchLogUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getMLModelTrainingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('processingJob'),
                new \PHPStan\Type\Constant\ConstantStringType('hpoJob'),
                new \PHPStan\Type\Constant\ConstantStringType('modelTransformJob'),
                new \PHPStan\Type\Constant\ConstantStringType('mlModels'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudwatchLogUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudwatchLogUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudwatchLogUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getMLModelTransformJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('baseProcessingJob'),
                new \PHPStan\Type\Constant\ConstantStringType('remoteModelTransformJob'),
                new \PHPStan\Type\Constant\ConstantStringType('models'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudwatchLogUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudwatchLogUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getOpenCypherQueryStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queryId'),
                new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                new \PHPStan\Type\Constant\ConstantStringType('queryEvalStats'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('waited'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsed'),
                    new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                    new \PHPStan\Type\Constant\ConstantStringType('subqueries'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                ]),
            ]),
        ]);
    }
    private function getPropertygraphStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('autoCompute'),
                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                    new \PHPStan\Type\Constant\ConstantStringType('statisticsId'),
                    new \PHPStan\Type\Constant\ConstantStringType('date'),
                    new \PHPStan\Type\Constant\ConstantStringType('note'),
                    new \PHPStan\Type\Constant\ConstantStringType('signatureInfo'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('signatureCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('predicateCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getPropertygraphStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lastEventId'),
                new \PHPStan\Type\Constant\ConstantStringType('lastTrxTimestampInMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('records'),
                new \PHPStan\Type\Constant\ConstantStringType('totalRecords'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('commitTimestampInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                        new \PHPStan\Type\Constant\ConstantStringType('data'),
                        new \PHPStan\Type\Constant\ConstantStringType('op'),
                        new \PHPStan\Type\Constant\ConstantStringType('isLastOp'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('from'),
                            new \PHPStan\Type\Constant\ConstantStringType('to'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getPropertygraphSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\IntegerType(),
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
            ]),
        ]);
    }
    private function getRDFGraphSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastStatisticsComputationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('graphSummary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('numDistinctSubjects'),
                        new \PHPStan\Type\Constant\ConstantStringType('numDistinctPredicates'),
                        new \PHPStan\Type\Constant\ConstantStringType('numQuads'),
                        new \PHPStan\Type\Constant\ConstantStringType('numClasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('classes'),
                        new \PHPStan\Type\Constant\ConstantStringType('predicates'),
                        new \PHPStan\Type\Constant\ConstantStringType('subjectStructures'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('count'),
                                new \PHPStan\Type\Constant\ConstantStringType('predicates'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSparqlStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('autoCompute'),
                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                    new \PHPStan\Type\Constant\ConstantStringType('statisticsId'),
                    new \PHPStan\Type\Constant\ConstantStringType('date'),
                    new \PHPStan\Type\Constant\ConstantStringType('note'),
                    new \PHPStan\Type\Constant\ConstantStringType('signatureInfo'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('signatureCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('predicateCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSparqlStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lastEventId'),
                new \PHPStan\Type\Constant\ConstantStringType('lastTrxTimestampInMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('records'),
                new \PHPStan\Type\Constant\ConstantStringType('totalRecords'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('commitTimestampInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                        new \PHPStan\Type\Constant\ConstantStringType('data'),
                        new \PHPStan\Type\Constant\ConstantStringType('op'),
                        new \PHPStan\Type\Constant\ConstantStringType('isLastOp'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('stmt'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listGremlinQueries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('acceptedQueryCount'),
                new \PHPStan\Type\Constant\ConstantStringType('runningQueryCount'),
                new \PHPStan\Type\Constant\ConstantStringType('queries'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryEvalStats'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('waited'),
                            new \PHPStan\Type\Constant\ConstantStringType('elapsed'),
                            new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('subqueries'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listLoaderJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('loadIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listMLDataProcessingJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ids'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listMLEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ids'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listMLModelTrainingJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ids'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listMLModelTransformJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ids'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listOpenCypherQueries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('acceptedQueryCount'),
                new \PHPStan\Type\Constant\ConstantStringType('runningQueryCount'),
                new \PHPStan\Type\Constant\ConstantStringType('queries'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('queryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryString'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryEvalStats'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('waited'),
                            new \PHPStan\Type\Constant\ConstantStringType('elapsed'),
                            new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                            new \PHPStan\Type\Constant\ConstantStringType('subqueries'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function managePropertygraphStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statisticsId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function manageSparqlStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statisticsId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startLoaderJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('payload'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function startMLDataProcessingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimeInMillis'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function startMLModelTrainingJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimeInMillis'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function startMLModelTransformJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimeInMillis'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
}