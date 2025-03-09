<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ApplicationCostProfilerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ApplicationCostProfiler\ApplicationCostProfilerClient>
     */
    public function getClass(): string
    {
        return \Aws\ApplicationCostProfiler\ApplicationCostProfilerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'deleteReportDefinition',
            'getReportDefinition',
            'importApplicationUsage',
            'listReportDefinitions',
            'putReportDefinition',
            'updateReportDefinition',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'deleteReportDefinition' => $this->deleteReportDefinition(),
            'getReportDefinition' => $this->getReportDefinition(),
            'importApplicationUsage' => $this->importApplicationUsage(),
            'listReportDefinitions' => $this->listReportDefinitions(),
            'putReportDefinition' => $this->putReportDefinition(),
            'updateReportDefinition' => $this->updateReportDefinition(),
        };
    }
    private function deleteReportDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getReportDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportId'),
                new \PHPStan\Type\Constant\ConstantStringType('reportDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('reportFrequency'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationS3Location'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                    new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function importApplicationUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('importId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReportDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('reportId'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportFrequency'),
                        new \PHPStan\Type\Constant\ConstantStringType('format'),
                        new \PHPStan\Type\Constant\ConstantStringType('destinationS3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putReportDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateReportDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}