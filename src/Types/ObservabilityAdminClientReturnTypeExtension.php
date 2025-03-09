<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ObservabilityAdminClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ObservabilityAdmin\ObservabilityAdminClient>
     */
    public function getClass(): string
    {
        return \Aws\ObservabilityAdmin\ObservabilityAdminClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'getTelemetryEvaluationStatus',
            'getTelemetryEvaluationStatusForOrganization',
            'listResourceTelemetry',
            'listResourceTelemetryForOrganization',
            'startTelemetryEvaluation',
            'startTelemetryEvaluationForOrganization',
            'stopTelemetryEvaluation',
            'stopTelemetryEvaluationForOrganization',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'getTelemetryEvaluationStatus' => $this->getTelemetryEvaluationStatus(),
            'getTelemetryEvaluationStatusForOrganization' => $this->getTelemetryEvaluationStatusForOrganization(),
            'listResourceTelemetry' => $this->listResourceTelemetry(),
            'listResourceTelemetryForOrganization' => $this->listResourceTelemetryForOrganization(),
            'startTelemetryEvaluation' => $this->startTelemetryEvaluation(),
            'startTelemetryEvaluationForOrganization' => $this->startTelemetryEvaluationForOrganization(),
            'stopTelemetryEvaluation' => $this->stopTelemetryEvaluation(),
            'stopTelemetryEvaluationForOrganization' => $this->stopTelemetryEvaluationForOrganization(),
        };
    }
    private function getTelemetryEvaluationStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_START'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_STOP'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTelemetryEvaluationStatusForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_START'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_STOP'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceTelemetry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TelemetryConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('TelemetryConfigurationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTimeStamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('Traces'),
                        ]), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Instance'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::Function'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceTelemetryForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TelemetryConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('TelemetryConfigurationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTimeStamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Logs'),
                            new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('Traces'),
                        ]), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Instance'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS::Lambda::Function'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startTelemetryEvaluation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startTelemetryEvaluationForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopTelemetryEvaluation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopTelemetryEvaluationForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}