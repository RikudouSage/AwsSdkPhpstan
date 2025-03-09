<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class OSISClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\OSIS\OSISClient>
     */
    public function getClass(): string
    {
        return \Aws\OSIS\OSISClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createPipeline',
            'deletePipeline',
            'getPipeline',
            'getPipelineBlueprint',
            'getPipelineChangeProgress',
            'listPipelineBlueprints',
            'listPipelines',
            'listTagsForResource',
            'startPipeline',
            'stopPipeline',
            'tagResource',
            'untagResource',
            'updatePipeline',
            'validatePipeline',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createPipeline' => $this->createPipeline(),
            'deletePipeline' => $this->deletePipeline(),
            'getPipeline' => $this->getPipeline(),
            'getPipelineBlueprint' => $this->getPipelineBlueprint(),
            'getPipelineChangeProgress' => $this->getPipelineChangeProgress(),
            'listPipelineBlueprints' => $this->listPipelineBlueprints(),
            'listPipelines' => $this->listPipelines(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startPipeline' => $this->startPipeline(),
            'stopPipeline' => $this->stopPipeline(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updatePipeline' => $this->updatePipeline(),
            'validatePipeline' => $this->validatePipeline(),
        };
    }
    private function createPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Pipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineConfigurationBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestEndpointUrls'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('BufferOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointService'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceVpcEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsLoggingEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogDestination'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcOptions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcAttachmentOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointManagement'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttachToVpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PersistentBufferEnabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH_SERVERLESS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deletePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Pipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineConfigurationBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestEndpointUrls'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('BufferOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointService'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceVpcEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsLoggingEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogDestination'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcOptions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcAttachmentOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointManagement'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttachToVpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PersistentBufferEnabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH_SERVERLESS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getPipelineBlueprint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Blueprint'),
                new \PHPStan\Type\Constant\ConstantStringType('Format'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BlueprintName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineConfigurationBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Service'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseCase'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPipelineChangeProgress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeProgressStatuses'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfStages'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeProgressStages'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPipelineBlueprints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Blueprints'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BlueprintName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('Service'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseCase'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPipelines(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Pipelines'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('PipelineName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PipelineArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function startPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Pipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineConfigurationBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestEndpointUrls'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('BufferOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointService'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceVpcEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsLoggingEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogDestination'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcOptions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcAttachmentOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointManagement'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttachToVpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PersistentBufferEnabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH_SERVERLESS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function stopPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Pipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineConfigurationBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestEndpointUrls'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('BufferOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointService'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceVpcEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsLoggingEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogDestination'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcOptions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcAttachmentOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointManagement'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttachToVpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PersistentBufferEnabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH_SERVERLESS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
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
    private function updatePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Pipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('PipelineConfigurationBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestEndpointUrls'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('BufferOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointService'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceVpcEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsLoggingEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogDestination'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcOptions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcAttachmentOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointManagement'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttachToVpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PersistentBufferEnabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH_SERVERLESS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function validatePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('isValid'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
}