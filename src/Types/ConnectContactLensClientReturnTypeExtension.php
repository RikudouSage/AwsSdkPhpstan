<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ConnectContactLensClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ConnectContactLens\ConnectContactLensClient>
     */
    public function getClass(): string
    {
        return \Aws\ConnectContactLens\ConnectContactLensClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'listRealtimeContactAnalysisSegments',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'listRealtimeContactAnalysisSegments' => $this->listRealtimeContactAnalysisSegments(),
        };
    }
    private function listRealtimeContactAnalysisSegments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Segments'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Transcript'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostContactSummary'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParticipantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParticipantRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffsetMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffsetMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sentiment'),
                        new \PHPStan\Type\Constant\ConstantStringType('IssuesDetected'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('POSITIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEUTRAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CharacterOffsets'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffsetChar'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndOffsetChar'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MatchedCategories'),
                        new \PHPStan\Type\Constant\ConstantStringType('MatchedDetails'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PointsOfInterest'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffsetMillis'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndOffsetMillis'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_CONVERSATION_CONTENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_SAFETY_GUIDELINES'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_ANALYSIS_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}