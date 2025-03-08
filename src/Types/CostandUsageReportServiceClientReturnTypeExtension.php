<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CostandUsageReportServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CostandUsageReportService\CostandUsageReportServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\CostandUsageReportService\CostandUsageReportServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'deleteReportDefinition',
            'describeReportDefinitions',
            'listTagsForResource',
            'modifyReportDefinition',
            'putReportDefinition',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'deleteReportDefinition' => $this->deleteReportDefinition(),
            'describeReportDefinitions' => $this->describeReportDefinitions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'modifyReportDefinition' => $this->modifyReportDefinition(),
            'putReportDefinition' => $this->putReportDefinition(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function deleteReportDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResponseMessage'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeReportDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReportDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeUnit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('Compression'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalSchemaElements'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Prefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('RefreshClosedReports'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportVersioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('BillingViewArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HOURLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHLY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('textORcsv'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parquet'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parquet'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCES'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPLIT_COST_ALLOCATION_DATA'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_DISCOUNT_COMPATIBILITY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUICKSIGHT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_NEW_REPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('OVERWRITE_REPORT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lastDelivery'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR_PERMISSIONS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR_NO_BUCKET'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function modifyReportDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putReportDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
}