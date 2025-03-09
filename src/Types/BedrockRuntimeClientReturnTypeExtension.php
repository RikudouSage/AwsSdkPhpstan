<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BedrockRuntimeClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\BedrockRuntime\BedrockRuntimeClient>
     */
    public function getClass(): string
    {
        return \Aws\BedrockRuntime\BedrockRuntimeClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'applyGuardrail',
            'converse',
            'converseStream',
            'getAsyncInvoke',
            'invokeModel',
            'invokeModelWithResponseStream',
            'listAsyncInvokes',
            'startAsyncInvoke',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'applyGuardrail' => $this->applyGuardrail(),
            'converse' => $this->converse(),
            'converseStream' => $this->converseStream(),
            'getAsyncInvoke' => $this->getAsyncInvoke(),
            'invokeModel' => $this->invokeModel(),
            'invokeModelWithResponseStream' => $this->invokeModelWithResponseStream(),
            'listAsyncInvokes' => $this->listAsyncInvokes(),
            'startAsyncInvoke' => $this->startAsyncInvoke(),
        };
    }
    private function applyGuardrail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('usage'),
                new \PHPStan\Type\Constant\ConstantStringType('action'),
                new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                new \PHPStan\Type\Constant\ConstantStringType('assessments'),
                new \PHPStan\Type\Constant\ConstantStringType('guardrailCoverage'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('topicPolicyUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentPolicyUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('wordPolicyUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyFreeUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicyUnits'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('GUARDRAIL_INTERVENED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('topicPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('wordPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('invocationMetrics'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('topics'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('confidence'),
                                    new \PHPStan\Type\Constant\ConstantStringType('filterStrength'),
                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('customWords'),
                            new \PHPStan\Type\Constant\ConstantStringType('managedWordLists'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('piiEntities'),
                            new \PHPStan\Type\Constant\ConstantStringType('regexes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                ], [
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
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                                    new \PHPStan\Type\Constant\ConstantStringType('score'),
                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GROUNDING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RELEVANCE'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('guardrailProcessingLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('usage'),
                            new \PHPStan\Type\Constant\ConstantStringType('guardrailCoverage'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('topicPolicyUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('contentPolicyUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('wordPolicyUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyFreeUnits'),
                                new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicyUnits'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('textCharacters'),
                                new \PHPStan\Type\Constant\ConstantStringType('images'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('total'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('total'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('textCharacters'),
                    new \PHPStan\Type\Constant\ConstantStringType('images'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function converse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('output'),
                new \PHPStan\Type\Constant\ConstantStringType('stopReason'),
                new \PHPStan\Type\Constant\ConstantStringType('usage'),
                new \PHPStan\Type\Constant\ConstantStringType('metrics'),
                new \PHPStan\Type\Constant\ConstantStringType('additionalModelResponseFields'),
                new \PHPStan\Type\Constant\ConstantStringType('trace'),
                new \PHPStan\Type\Constant\ConstantStringType('performanceConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('role'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('user'),
                            new \PHPStan\Type\Constant\ConstantStringType('assistant'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('image'),
                                new \PHPStan\Type\Constant\ConstantStringType('document'),
                                new \PHPStan\Type\Constant\ConstantStringType('video'),
                                new \PHPStan\Type\Constant\ConstantStringType('toolUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('toolResult'),
                                new \PHPStan\Type\Constant\ConstantStringType('guardContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('reasoningContent'),
                            ], [
                                new \PHPStan\Type\StringType(),
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
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('pdf'),
                                        new \PHPStan\Type\Constant\ConstantStringType('csv'),
                                        new \PHPStan\Type\Constant\ConstantStringType('doc'),
                                        new \PHPStan\Type\Constant\ConstantStringType('docx'),
                                        new \PHPStan\Type\Constant\ConstantStringType('xls'),
                                        new \PHPStan\Type\Constant\ConstantStringType('xlsx'),
                                        new \PHPStan\Type\Constant\ConstantStringType('html'),
                                        new \PHPStan\Type\Constant\ConstantStringType('txt'),
                                        new \PHPStan\Type\Constant\ConstantStringType('md'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('mkv'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mov'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mp4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('webm'),
                                        new \PHPStan\Type\Constant\ConstantStringType('flv'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mpeg'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mpg'),
                                        new \PHPStan\Type\Constant\ConstantStringType('wmv'),
                                        new \PHPStan\Type\Constant\ConstantStringType('three_gp'),
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
                                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwner'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('toolUseId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('input'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('toolUseId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('image'),
                                            new \PHPStan\Type\Constant\ConstantStringType('document'),
                                            new \PHPStan\Type\Constant\ConstantStringType('video'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                            new \PHPStan\Type\StringType(),
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
                                                ], [
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ResourceType(),
                                                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                                    ]),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('format'),
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('source'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('pdf'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('csv'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('doc'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('docx'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('xls'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('xlsx'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('html'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('txt'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('md'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                                                ], [
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ResourceType(),
                                                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                                    ]),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('format'),
                                                new \PHPStan\Type\Constant\ConstantStringType('source'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('mkv'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('mov'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('mp4'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('webm'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('flv'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('mpeg'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('mpg'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('wmv'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('three_gp'),
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
                                                        new \PHPStan\Type\Constant\ConstantStringType('bucketOwner'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ]),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('success'),
                                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('image'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        new \PHPStan\Type\Constant\ConstantStringType('qualifiers'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('grounding_source'),
                                                new \PHPStan\Type\Constant\ConstantStringType('query'),
                                                new \PHPStan\Type\Constant\ConstantStringType('guard_content'),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('format'),
                                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('png'),
                                            new \PHPStan\Type\Constant\ConstantStringType('jpeg'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ResourceType(),
                                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('reasoningText'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redactedContent'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                        new \PHPStan\Type\Constant\ConstantStringType('signature'),
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
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('end_turn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tool_use'),
                    new \PHPStan\Type\Constant\ConstantStringType('max_tokens'),
                    new \PHPStan\Type\Constant\ConstantStringType('stop_sequence'),
                    new \PHPStan\Type\Constant\ConstantStringType('guardrail_intervened'),
                    new \PHPStan\Type\Constant\ConstantStringType('content_filtered'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputTokens'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputTokens'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalTokens'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('latencyMs'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('guardrail'),
                    new \PHPStan\Type\Constant\ConstantStringType('promptRouter'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('modelOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputAssessment'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputAssessments'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('topicPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('contentPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('wordPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('invocationMetrics'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('topics'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('filters'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('confidence'),
                                        new \PHPStan\Type\Constant\ConstantStringType('filterStrength'),
                                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('customWords'),
                                new \PHPStan\Type\Constant\ConstantStringType('managedWordLists'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('piiEntities'),
                                new \PHPStan\Type\Constant\ConstantStringType('regexes'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                                    ], [
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
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                        ]),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('filters'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                                        new \PHPStan\Type\Constant\ConstantStringType('score'),
                                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GROUNDING'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RELEVANCE'),
                                        ]),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        ]),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailProcessingLatency'),
                                new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                new \PHPStan\Type\Constant\ConstantStringType('guardrailCoverage'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('topicPolicyUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('contentPolicyUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('wordPolicyUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyFreeUnits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicyUnits'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('textCharacters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('images'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('topicPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('contentPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('wordPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('invocationMetrics'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('topics'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('confidence'),
                                            new \PHPStan\Type\Constant\ConstantStringType('filterStrength'),
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('customWords'),
                                    new \PHPStan\Type\Constant\ConstantStringType('managedWordLists'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('piiEntities'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regexes'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                        ], [
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
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                                            new \PHPStan\Type\Constant\ConstantStringType('score'),
                                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('GROUNDING'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RELEVANCE'),
                                            ]),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailProcessingLatency'),
                                    new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('guardrailCoverage'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('topicPolicyUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('contentPolicyUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('wordPolicyUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyFreeUnits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicyUnits'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('textCharacters'),
                                        new \PHPStan\Type\Constant\ConstantStringType('images'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                                            new \PHPStan\Type\Constant\ConstantStringType('total'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                                            new \PHPStan\Type\Constant\ConstantStringType('total'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]))),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('invokedModelId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('latency'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('optimized'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function converseStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stream'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messageStart'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentBlockStart'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentBlockDelta'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentBlockStop'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageStop'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('internalServerException'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelStreamErrorException'),
                    new \PHPStan\Type\Constant\ConstantStringType('validationException'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingException'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceUnavailableException'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('role'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('user'),
                            new \PHPStan\Type\Constant\ConstantStringType('assistant'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('start'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentBlockIndex'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('toolUse'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('toolUseId'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('delta'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentBlockIndex'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('toolUse'),
                            new \PHPStan\Type\Constant\ConstantStringType('reasoningContent'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('input'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                                new \PHPStan\Type\Constant\ConstantStringType('redactedContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('signature'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ResourceType(),
                                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentBlockIndex'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stopReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('additionalModelResponseFields'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('end_turn'),
                            new \PHPStan\Type\Constant\ConstantStringType('tool_use'),
                            new \PHPStan\Type\Constant\ConstantStringType('max_tokens'),
                            new \PHPStan\Type\Constant\ConstantStringType('stop_sequence'),
                            new \PHPStan\Type\Constant\ConstantStringType('guardrail_intervened'),
                            new \PHPStan\Type\Constant\ConstantStringType('content_filtered'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('usage'),
                        new \PHPStan\Type\Constant\ConstantStringType('metrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('trace'),
                        new \PHPStan\Type\Constant\ConstantStringType('performanceConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('inputTokens'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputTokens'),
                            new \PHPStan\Type\Constant\ConstantStringType('totalTokens'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('latencyMs'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('guardrail'),
                            new \PHPStan\Type\Constant\ConstantStringType('promptRouter'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('modelOutput'),
                                new \PHPStan\Type\Constant\ConstantStringType('inputAssessment'),
                                new \PHPStan\Type\Constant\ConstantStringType('outputAssessments'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('topicPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('contentPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('wordPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('invocationMetrics'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('topics'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('confidence'),
                                                new \PHPStan\Type\Constant\ConstantStringType('filterStrength'),
                                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                                                ]),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                                ]),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('customWords'),
                                        new \PHPStan\Type\Constant\ConstantStringType('managedWordLists'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('piiEntities'),
                                        new \PHPStan\Type\Constant\ConstantStringType('regexes'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            ], [
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
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                ]),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                ]),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                                                new \PHPStan\Type\Constant\ConstantStringType('score'),
                                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('GROUNDING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('RELEVANCE'),
                                                ]),
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\FloatType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                ]),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('guardrailProcessingLatency'),
                                        new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                        new \PHPStan\Type\Constant\ConstantStringType('guardrailCoverage'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('topicPolicyUnits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('contentPolicyUnits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('wordPolicyUnits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyUnits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyFreeUnits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicyUnits'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('textCharacters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('images'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                                                new \PHPStan\Type\Constant\ConstantStringType('total'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                                                new \PHPStan\Type\Constant\ConstantStringType('total'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('topicPolicy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('contentPolicy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('wordPolicy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('invocationMetrics'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('topics'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                ]),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('confidence'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('filterStrength'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                                ], [
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('INSULTS'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('HATE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('MISCONDUCT'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('PROMPT_ATTACK'),
                                                    ]),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                                    ]),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                ]),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('customWords'),
                                            new \PHPStan\Type\Constant\ConstantStringType('managedWordLists'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                ]),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('piiEntities'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regexes'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                                ], [
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
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                    ]),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('ANONYMIZED'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                    ]),
                                                ]),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('filters'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('score'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                                                ], [
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('GROUNDING'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('RELEVANCE'),
                                                    ]),
                                                    new \PHPStan\Type\FloatType(),
                                                    new \PHPStan\Type\FloatType(),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('BLOCKED'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                    ]),
                                                ]),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('guardrailProcessingLatency'),
                                            new \PHPStan\Type\Constant\ConstantStringType('usage'),
                                            new \PHPStan\Type\Constant\ConstantStringType('guardrailCoverage'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('topicPolicyUnits'),
                                                new \PHPStan\Type\Constant\ConstantStringType('contentPolicyUnits'),
                                                new \PHPStan\Type\Constant\ConstantStringType('wordPolicyUnits'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyUnits'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sensitiveInformationPolicyFreeUnits'),
                                                new \PHPStan\Type\Constant\ConstantStringType('contextualGroundingPolicyUnits'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('textCharacters'),
                                                new \PHPStan\Type\Constant\ConstantStringType('images'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('total'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('guarded'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('total'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                ]))),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('invokedModelId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('latency'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('standard'),
                                new \PHPStan\Type\Constant\ConstantStringType('optimized'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('originalStatusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('originalMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
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
    private function getAsyncInvoke(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('invocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('submitTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('outputDataConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3OutputDataConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucketOwner'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function invokeModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('body'),
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('performanceConfigLatency'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('standard'),
                    new \PHPStan\Type\Constant\ConstantStringType('optimized'),
                ]),
            ]),
        ]);
    }
    private function invokeModelWithResponseStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('body'),
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('performanceConfigLatency'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('chunk'),
                    new \PHPStan\Type\Constant\ConstantStringType('internalServerException'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelStreamErrorException'),
                    new \PHPStan\Type\Constant\ConstantStringType('validationException'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingException'),
                    new \PHPStan\Type\Constant\ConstantStringType('modelTimeoutException'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceUnavailableException'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                    ], [
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
                        new \PHPStan\Type\Constant\ConstantStringType('originalStatusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('originalMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
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
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('standard'),
                    new \PHPStan\Type\Constant\ConstantStringType('optimized'),
                ]),
            ]),
        ]);
    }
    private function listAsyncInvokes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('asyncInvokeSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('invocationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('submitTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputDataConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3OutputDataConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketOwner'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function startAsyncInvoke(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('invocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}