<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BedrockAgentRuntimeClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\BedrockAgentRuntime\BedrockAgentRuntimeClient>
     */
    public function getClass(): string
    {
        return \Aws\BedrockAgentRuntime\BedrockAgentRuntimeClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createInvocation',
            'createSession',
            'deleteAgentMemory',
            'deleteSession',
            'endSession',
            'generateQuery',
            'getAgentMemory',
            'getInvocationStep',
            'getSession',
            'invokeAgent',
            'invokeFlow',
            'invokeInlineAgent',
            'listInvocationSteps',
            'listInvocations',
            'listSessions',
            'listTagsForResource',
            'optimizePrompt',
            'putInvocationStep',
            'rerank',
            'retrieve',
            'retrieveAndGenerate',
            'retrieveAndGenerateStream',
            'tagResource',
            'untagResource',
            'updateSession',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createInvocation' => $this->createInvocation(),
            'createSession' => $this->createSession(),
            'deleteAgentMemory' => $this->deleteAgentMemory(),
            'deleteSession' => $this->deleteSession(),
            'endSession' => $this->endSession(),
            'generateQuery' => $this->generateQuery(),
            'getAgentMemory' => $this->getAgentMemory(),
            'getInvocationStep' => $this->getInvocationStep(),
            'getSession' => $this->getSession(),
            'invokeAgent' => $this->invokeAgent(),
            'invokeFlow' => $this->invokeFlow(),
            'invokeInlineAgent' => $this->invokeInlineAgent(),
            'listInvocationSteps' => $this->listInvocationSteps(),
            'listInvocations' => $this->listInvocations(),
            'listSessions' => $this->listSessions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'optimizePrompt' => $this->optimizePrompt(),
            'putInvocationStep' => $this->putInvocationStep(),
            'rerank' => $this->rerank(),
            'retrieve' => $this->retrieve(),
            'retrieveAndGenerate' => $this->retrieveAndGenerate(),
            'retrieveAndGenerateStream' => $this->retrieveAndGenerateStream(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateSession' => $this->updateSession(),
        };
    }
    private function createInvocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionStatus'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENDED'),
                ]),
            ]),
        ]);
    }
    private function deleteAgentMemory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function endSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENDED'),
                ]),
            ]),
        ]);
    }
    private function generateQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queries'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sql'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT_SQL'),
                ])),
            ]),
        ]);
    }
    private function getAgentMemory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('memoryContents'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sessionSummary'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('memoryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionExpiryTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('summaryText'),
                    ], [
                        new \PHPStan\Type\StringType(),
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
    private function getInvocationStep(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('invocationStep'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('invocationStepId'),
                    new \PHPStan\Type\Constant\ConstantStringType('invocationStepTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('payload'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentBlocks'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('image'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('format'),
                                new \PHPStan\Type\Constant\ConstantStringType('source'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('png'),
                                    new \PHPStan\Type\Constant\ConstantStringType('jpeg'),
                                    new \PHPStan\Type\Constant\ConstantStringType('gif'),
                                    new \PHPStan\Type\Constant\ConstantStringType('webp'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ResourceType(),
                                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionStatus'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENDED'),
                ]),
            ]),
        ]);
    }
    private function invokeAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('completion'),
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('memoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessDeniedException'),
                    new \PHPStan\Type\Constant\ConstantStringType('badGatewayException'),
                    new \PHPStan\Type\Constant\ConstantStringType('chunk'),
                    new \PHPStan\Type\Constant\ConstantStringType('conflictException'),
                    new \PHPStan\Type\Constant\ConstantStringType('dependencyFailedException'),
                    new \PHPStan\Type\Constant\ConstantStringType('files'),
                    new \PHPStan\Type\Constant\ConstantStringType('internalServerException'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelNotReadyException'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceNotFoundException'),
                    new \PHPStan\Type\Constant\ConstantStringType('returnControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceQuotaExceededException'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingException'),
                    new \PHPStan\Type\Constant\ConstantStringType('trace'),
                    new \PHPStan\Type\Constant\ConstantStringType('validationException'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attribution'),
                        new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('citations'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('generatedResponsePart'),
                                new \PHPStan\Type\Constant\ConstantStringType('retrievedReferences'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('textResponsePart'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('span'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('end'),
                                            new \PHPStan\Type\Constant\ConstantStringType('start'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('byteContent'),
                                        new \PHPStan\Type\Constant\ConstantStringType('row'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('columnValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOB'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROW'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('confluenceLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('customDocumentLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('kendraDocumentLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('salesforceLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sharePointLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sqlLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('webLocation'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('query'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                                ])),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('files'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('invocationInputs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiInvocationInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('functionInvocationInput'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('requestBody'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                new \PHPStan\Type\Constant\ConstantStringType('function'),
                                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
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
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentAliasId'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('callerChain'),
                        new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('trace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('agentAliasArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customOrchestrationTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('guardrailTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('orchestrationTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('postProcessingTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('preProcessingTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('routingClassifierTrace'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('event'),
                                new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('inputAssessments'),
                                new \PHPStan\Type\Constant\ConstantStringType('outputAssessments'),
                                new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERVENED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('contentPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('topicPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('wordPolicy'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('confidence'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('piiEntities'),
                                        new \PHPStan\Type\Constant\ConstantStringType('regexes'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_CVV'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_EXPIRY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ACCOUNT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ROUTING_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_PASSPORT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_SOCIAL_SECURITY_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('topics'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('customWords'),
                                        new \PHPStan\Type\Constant\ConstantStringType('managedWordLists'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('contentPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('topicPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('wordPolicy'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('confidence'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('piiEntities'),
                                        new \PHPStan\Type\Constant\ConstantStringType('regexes'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_CVV'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_EXPIRY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ACCOUNT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ROUTING_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_PASSPORT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_SOCIAL_SECURITY_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('topics'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('customWords'),
                                        new \PHPStan\Type\Constant\ConstantStringType('managedWordLists'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('invocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationOutput'),
                                new \PHPStan\Type\Constant\ConstantStringType('observation'),
                                new \PHPStan\Type\Constant\ConstantStringType('rationale'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('codeInterpreterInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('invocationType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseLookupInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroupName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                        new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                        new \PHPStan\Type\Constant\ConstantStringType('requestBody'),
                                        new \PHPStan\Type\Constant\ConstantStringType('verb'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]))),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorAliasArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('input'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('returnControlResults'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('returnControlInvocationResults'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('apiResult'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('functionResult'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpStatusCode'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseBody'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseState'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\IntegerType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('FAILURE'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseBody'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseState'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('FAILURE'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                                        ]),
                                                    ]),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                                        new \PHPStan\Type\Constant\ConstantStringType('files'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FINISH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP_CODE_INTERPRETER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_COLLABORATOR'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                        new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ROUTING_CLASSIFIER'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rawResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reasoningContent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputTokens'),
                                            new \PHPStan\Type\Constant\ConstantStringType('outputTokens'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('reasoningText'),
                                        new \PHPStan\Type\Constant\ConstantStringType('redactedContent'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('signature'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('codeInterpreterInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('finalResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseLookupOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('repromptResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorAliasArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('returnControlPayload'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationInputs'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('apiInvocationInput'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('functionInvocationInput'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('requestBody'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                                        ], [
                                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                                            ], [
                                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                                ], [
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\StringType(),
                                                                ])),
                                                            ])),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('executionError'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionOutput'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionTimeout'),
                                        new \PHPStan\Type\Constant\ConstantStringType('files'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('retrievedReferences'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                                            new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('byteContent'),
                                                new \PHPStan\Type\Constant\ConstantStringType('row'),
                                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('columnValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('BLOB'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ROW'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('confluenceLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('customDocumentLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('kendraDocumentLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                                new \PHPStan\Type\Constant\ConstantStringType('salesforceLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sharePointLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sqlLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('webLocation'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('query'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PARSER'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_COLLABORATOR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FINISH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ASK_USER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationOutput'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                        new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ROUTING_CLASSIFIER'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parsedResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rawResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reasoningContent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputTokens'),
                                            new \PHPStan\Type\Constant\ConstantStringType('outputTokens'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('reasoningText'),
                                        new \PHPStan\Type\Constant\ConstantStringType('redactedContent'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('signature'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationOutput'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                        new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ROUTING_CLASSIFIER'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parsedResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rawResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reasoningContent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputTokens'),
                                            new \PHPStan\Type\Constant\ConstantStringType('outputTokens'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('isValid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rationale'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('reasoningText'),
                                        new \PHPStan\Type\Constant\ConstantStringType('redactedContent'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('signature'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('invocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationOutput'),
                                new \PHPStan\Type\Constant\ConstantStringType('observation'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('codeInterpreterInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('invocationType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseLookupInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroupName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                        new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                        new \PHPStan\Type\Constant\ConstantStringType('requestBody'),
                                        new \PHPStan\Type\Constant\ConstantStringType('verb'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]))),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorAliasArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('input'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('returnControlResults'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('returnControlInvocationResults'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('apiResult'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('functionResult'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpStatusCode'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseBody'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseState'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\IntegerType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('FAILURE'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseBody'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseState'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('FAILURE'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                                        ]),
                                                    ]),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                                        new \PHPStan\Type\Constant\ConstantStringType('files'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FINISH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP_CODE_INTERPRETER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_COLLABORATOR'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                        new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ROUTING_CLASSIFIER'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rawResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputTokens'),
                                            new \PHPStan\Type\Constant\ConstantStringType('outputTokens'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('codeInterpreterInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('finalResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseLookupOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('repromptResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorAliasArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('returnControlPayload'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationInputs'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('apiInvocationInput'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('functionInvocationInput'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('requestBody'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                                        ], [
                                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                                            ], [
                                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                                ], [
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\StringType(),
                                                                ])),
                                                            ])),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('executionError'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionOutput'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionTimeout'),
                                        new \PHPStan\Type\Constant\ConstantStringType('files'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('retrievedReferences'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                                            new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('byteContent'),
                                                new \PHPStan\Type\Constant\ConstantStringType('row'),
                                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('columnValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('BLOB'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ROW'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('confluenceLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('customDocumentLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('kendraDocumentLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                                new \PHPStan\Type\Constant\ConstantStringType('salesforceLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sharePointLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sqlLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('webLocation'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('query'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PARSER'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_COLLABORATOR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FINISH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ASK_USER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function invokeFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executionId'),
                new \PHPStan\Type\Constant\ConstantStringType('responseStream'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessDeniedException'),
                    new \PHPStan\Type\Constant\ConstantStringType('badGatewayException'),
                    new \PHPStan\Type\Constant\ConstantStringType('conflictException'),
                    new \PHPStan\Type\Constant\ConstantStringType('dependencyFailedException'),
                    new \PHPStan\Type\Constant\ConstantStringType('flowCompletionEvent'),
                    new \PHPStan\Type\Constant\ConstantStringType('flowMultiTurnInputRequestEvent'),
                    new \PHPStan\Type\Constant\ConstantStringType('flowOutputEvent'),
                    new \PHPStan\Type\Constant\ConstantStringType('flowTraceEvent'),
                    new \PHPStan\Type\Constant\ConstantStringType('internalServerException'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceNotFoundException'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceQuotaExceededException'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingException'),
                    new \PHPStan\Type\Constant\ConstantStringType('validationException'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('completionReason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('INPUT_REQUIRED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('document'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FlowInputNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlowOutputNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('KnowledgeBaseNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('PromptNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('LexNode'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('document'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FlowInputNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlowOutputNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('KnowledgeBaseNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('PromptNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConditionNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('LexNode'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('trace'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('conditionNodeResultTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodeInputTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodeOutputTrace'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('nodeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('satisfiedConditions'),
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('conditionName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fields'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodeInputName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('document'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fields'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nodeOutputName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('document'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
    private function invokeInlineAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('completion'),
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessDeniedException'),
                    new \PHPStan\Type\Constant\ConstantStringType('badGatewayException'),
                    new \PHPStan\Type\Constant\ConstantStringType('chunk'),
                    new \PHPStan\Type\Constant\ConstantStringType('conflictException'),
                    new \PHPStan\Type\Constant\ConstantStringType('dependencyFailedException'),
                    new \PHPStan\Type\Constant\ConstantStringType('files'),
                    new \PHPStan\Type\Constant\ConstantStringType('internalServerException'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceNotFoundException'),
                    new \PHPStan\Type\Constant\ConstantStringType('returnControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceQuotaExceededException'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingException'),
                    new \PHPStan\Type\Constant\ConstantStringType('trace'),
                    new \PHPStan\Type\Constant\ConstantStringType('validationException'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attribution'),
                        new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('citations'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('generatedResponsePart'),
                                new \PHPStan\Type\Constant\ConstantStringType('retrievedReferences'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('textResponsePart'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('span'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('end'),
                                            new \PHPStan\Type\Constant\ConstantStringType('start'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('byteContent'),
                                        new \PHPStan\Type\Constant\ConstantStringType('row'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('columnValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOB'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ROW'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('confluenceLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('customDocumentLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('kendraDocumentLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('salesforceLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sharePointLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sqlLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('webLocation'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('query'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                                ])),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('files'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('invocationInputs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiInvocationInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('functionInvocationInput'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('requestBody'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                new \PHPStan\Type\Constant\ConstantStringType('function'),
                                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
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
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('trace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customOrchestrationTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('guardrailTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('orchestrationTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('postProcessingTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('preProcessingTrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('routingClassifierTrace'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('event'),
                                new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('inputAssessments'),
                                new \PHPStan\Type\Constant\ConstantStringType('outputAssessments'),
                                new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERVENED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('contentPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('topicPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('wordPolicy'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('confidence'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('piiEntities'),
                                        new \PHPStan\Type\Constant\ConstantStringType('regexes'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_CVV'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_EXPIRY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ACCOUNT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ROUTING_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_PASSPORT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_SOCIAL_SECURITY_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('topics'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('customWords'),
                                        new \PHPStan\Type\Constant\ConstantStringType('managedWordLists'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('contentPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('topicPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('wordPolicy'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('confidence'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('piiEntities'),
                                        new \PHPStan\Type\Constant\ConstantStringType('regexes'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_CVV'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_EXPIRY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CARD_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ACCOUNT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_BANK_ROUTING_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_PASSPORT_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('US_SOCIAL_SECURITY_NUMBER'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('topics'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('customWords'),
                                        new \PHPStan\Type\Constant\ConstantStringType('managedWordLists'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                                        ])),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('invocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationOutput'),
                                new \PHPStan\Type\Constant\ConstantStringType('observation'),
                                new \PHPStan\Type\Constant\ConstantStringType('rationale'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('codeInterpreterInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('invocationType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseLookupInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroupName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                        new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                        new \PHPStan\Type\Constant\ConstantStringType('requestBody'),
                                        new \PHPStan\Type\Constant\ConstantStringType('verb'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]))),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorAliasArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('input'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('returnControlResults'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('returnControlInvocationResults'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('apiResult'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('functionResult'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpStatusCode'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseBody'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseState'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\IntegerType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('FAILURE'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseBody'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseState'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('FAILURE'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                                        ]),
                                                    ]),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                                        new \PHPStan\Type\Constant\ConstantStringType('files'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FINISH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP_CODE_INTERPRETER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_COLLABORATOR'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                        new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ROUTING_CLASSIFIER'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rawResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reasoningContent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputTokens'),
                                            new \PHPStan\Type\Constant\ConstantStringType('outputTokens'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('reasoningText'),
                                        new \PHPStan\Type\Constant\ConstantStringType('redactedContent'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('signature'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('codeInterpreterInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('finalResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseLookupOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('repromptResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorAliasArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('returnControlPayload'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationInputs'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('apiInvocationInput'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('functionInvocationInput'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('requestBody'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                                        ], [
                                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                                            ], [
                                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                                ], [
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\StringType(),
                                                                ])),
                                                            ])),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('executionError'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionOutput'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionTimeout'),
                                        new \PHPStan\Type\Constant\ConstantStringType('files'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('retrievedReferences'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                                            new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('byteContent'),
                                                new \PHPStan\Type\Constant\ConstantStringType('row'),
                                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('columnValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('BLOB'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ROW'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('confluenceLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('customDocumentLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('kendraDocumentLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                                new \PHPStan\Type\Constant\ConstantStringType('salesforceLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sharePointLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sqlLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('webLocation'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('query'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PARSER'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_COLLABORATOR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FINISH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ASK_USER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationOutput'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                        new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ROUTING_CLASSIFIER'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parsedResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rawResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reasoningContent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputTokens'),
                                            new \PHPStan\Type\Constant\ConstantStringType('outputTokens'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('reasoningText'),
                                        new \PHPStan\Type\Constant\ConstantStringType('redactedContent'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('signature'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationOutput'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                        new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ROUTING_CLASSIFIER'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parsedResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rawResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reasoningContent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputTokens'),
                                            new \PHPStan\Type\Constant\ConstantStringType('outputTokens'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('isValid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rationale'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('reasoningText'),
                                        new \PHPStan\Type\Constant\ConstantStringType('redactedContent'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('signature'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('invocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('modelInvocationOutput'),
                                new \PHPStan\Type\Constant\ConstantStringType('observation'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('codeInterpreterInvocationInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('invocationType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseLookupInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroupName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                        new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                        new \PHPStan\Type\Constant\ConstantStringType('requestBody'),
                                        new \PHPStan\Type\Constant\ConstantStringType('verb'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]))),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorAliasArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('input'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('returnControlResults'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('returnControlInvocationResults'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('apiResult'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('functionResult'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpStatusCode'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseBody'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseState'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\IntegerType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('FAILURE'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseBody'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('responseState'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('CONFIRM'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('body'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('FAILURE'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                                        ]),
                                                    ]),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                                        new \PHPStan\Type\Constant\ConstantStringType('files'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FINISH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP_CODE_INTERPRETER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_COLLABORATOR'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('foundationModel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('inferenceConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('overrideLambda'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parserMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('promptCreationMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maximumLength'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stopSequences'),
                                        new \PHPStan\Type\Constant\ConstantStringType('temperature'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topK'),
                                        new \PHPStan\Type\Constant\ConstantStringType('topP'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRE_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ORCHESTRATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE_RESPONSE_GENERATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST_PROCESSING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ROUTING_CLASSIFIER'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rawResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputTokens'),
                                            new \PHPStan\Type\Constant\ConstantStringType('outputTokens'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionGroupInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('codeInterpreterInvocationOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('finalResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('knowledgeBaseLookupOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('repromptResponse'),
                                    new \PHPStan\Type\Constant\ConstantStringType('traceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorAliasArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('agentCollaboratorName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('returnControlPayload'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('invocationInputs'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('apiInvocationInput'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('functionInvocationInput'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('apiPath'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('requestBody'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                                        ], [
                                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                                            ], [
                                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                                ], [
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\StringType(),
                                                                    new \PHPStan\Type\StringType(),
                                                                ])),
                                                            ])),
                                                        ]),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionGroup'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('actionInvocationType'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('collaboratorName'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('function'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('RESULT'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('USER_CONFIRMATION_AND_RESULT'),
                                                        ]),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                        ], [
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RETURN_CONTROL'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('executionError'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionOutput'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionTimeout'),
                                        new \PHPStan\Type\Constant\ConstantStringType('files'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('retrievedReferences'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                                            new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('byteContent'),
                                                new \PHPStan\Type\Constant\ConstantStringType('row'),
                                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('columnValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('BLOB'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    ]),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ROW'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('confluenceLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('customDocumentLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('kendraDocumentLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                                new \PHPStan\Type\Constant\ConstantStringType('salesforceLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sharePointLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sqlLocation'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('webLocation'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('query'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PARSER'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTION_GROUP'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AGENT_COLLABORATOR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KNOWLEDGE_BASE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FINISH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ASK_USER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('REPROMPT'),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInvocationSteps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('invocationStepSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('invocationStepId'),
                    new \PHPStan\Type\Constant\ConstantStringType('invocationStepTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInvocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('invocationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('invocationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionStatus'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENDED'),
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
    private function optimizePrompt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('optimizedPrompt'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessDeniedException'),
                    new \PHPStan\Type\Constant\ConstantStringType('analyzePromptEvent'),
                    new \PHPStan\Type\Constant\ConstantStringType('badGatewayException'),
                    new \PHPStan\Type\Constant\ConstantStringType('dependencyFailedException'),
                    new \PHPStan\Type\Constant\ConstantStringType('internalServerException'),
                    new \PHPStan\Type\Constant\ConstantStringType('optimizedPromptEvent'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingException'),
                    new \PHPStan\Type\Constant\ConstantStringType('validationException'),
                ], [
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
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('optimizedPrompt'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('textPrompt'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
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
    private function putInvocationStep(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('invocationStepId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rerank(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('results'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('document'),
                    new \PHPStan\Type\Constant\ConstantStringType('index'),
                    new \PHPStan\Type\Constant\ConstantStringType('relevanceScore'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('jsonDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('textDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ])),
            ]),
        ]);
    }
    private function retrieve(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('guardrailAction'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('retrievalResults'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INTERVENED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('score'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('byteContent'),
                        new \PHPStan\Type\Constant\ConstantStringType('row'),
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                            new \PHPStan\Type\Constant\ConstantStringType('columnValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROW'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('confluenceLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('customDocumentLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('kendraDocumentLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('salesforceLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('sharePointLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('sqlLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('webLocation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('query'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                    new \PHPStan\Type\FloatType(),
                ])),
            ]),
        ]);
    }
    private function retrieveAndGenerate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('citations'),
                new \PHPStan\Type\Constant\ConstantStringType('guardrailAction'),
                new \PHPStan\Type\Constant\ConstantStringType('output'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('generatedResponsePart'),
                    new \PHPStan\Type\Constant\ConstantStringType('retrievedReferences'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('textResponsePart'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('span'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('byteContent'),
                            new \PHPStan\Type\Constant\ConstantStringType('row'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                new \PHPStan\Type\Constant\ConstantStringType('columnValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BLOB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROW'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('confluenceLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('customDocumentLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('kendraDocumentLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                            new \PHPStan\Type\Constant\ConstantStringType('salesforceLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('sharePointLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('sqlLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('webLocation'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('uri'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('uri'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('query'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                                new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                    ])),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INTERVENED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function retrieveAndGenerateStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('stream'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessDeniedException'),
                    new \PHPStan\Type\Constant\ConstantStringType('badGatewayException'),
                    new \PHPStan\Type\Constant\ConstantStringType('citation'),
                    new \PHPStan\Type\Constant\ConstantStringType('conflictException'),
                    new \PHPStan\Type\Constant\ConstantStringType('dependencyFailedException'),
                    new \PHPStan\Type\Constant\ConstantStringType('guardrail'),
                    new \PHPStan\Type\Constant\ConstantStringType('internalServerException'),
                    new \PHPStan\Type\Constant\ConstantStringType('output'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceNotFoundException'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceQuotaExceededException'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingException'),
                    new \PHPStan\Type\Constant\ConstantStringType('validationException'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('citation'),
                        new \PHPStan\Type\Constant\ConstantStringType('generatedResponsePart'),
                        new \PHPStan\Type\Constant\ConstantStringType('retrievedReferences'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('generatedResponsePart'),
                            new \PHPStan\Type\Constant\ConstantStringType('retrievedReferences'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('textResponsePart'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('span'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('end'),
                                        new \PHPStan\Type\Constant\ConstantStringType('start'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('byteContent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('row'),
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('columnValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOB'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ROW'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('confluenceLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('customDocumentLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('kendraDocumentLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('salesforceLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sharePointLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sqlLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('webLocation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('query'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('textResponsePart'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('span'),
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('end'),
                                    new \PHPStan\Type\Constant\ConstantStringType('start'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('byteContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('row'),
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('columnValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BLOB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LONG'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROW'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('confluenceLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('customDocumentLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('kendraDocumentLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                                new \PHPStan\Type\Constant\ConstantStringType('salesforceLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('sharePointLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('sqlLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('webLocation'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('query'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONFLUENCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KENDRA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([], [])),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERVENED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\StringType(),
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
    private function updateSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionStatus'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENDED'),
                ]),
            ]),
        ]);
    }
}