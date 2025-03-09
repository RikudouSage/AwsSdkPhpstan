<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ResourceGroupsTaggingAPIClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient>
     */
    public function getClass(): string
    {
        return \Aws\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'describeReportCreation',
            'getComplianceSummary',
            'getResources',
            'getTagKeys',
            'getTagValues',
            'startReportCreation',
            'tagResources',
            'untagResources',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'describeReportCreation' => $this->describeReportCreation(),
            'getComplianceSummary' => $this->getComplianceSummary(),
            'getResources' => $this->getResources(),
            'getTagKeys' => $this->getTagKeys(),
            'getTagValues' => $this->getTagValues(),
            'startReportCreation' => $this->startReportCreation(),
            'tagResources' => $this->tagResources(),
            'untagResources' => $this->untagResources(),
        };
    }
    private function describeReportCreation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getComplianceSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetIdType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NonCompliantResources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('OU'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROOT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTagMappingList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComplianceDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NoncompliantKeys'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeysWithNoncompliantValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComplianceStatus'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getTagKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TagKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getTagValues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function startReportCreation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function tagResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedResourcesMap'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InternalServiceException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidParameterException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function untagResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedResourcesMap'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InternalServiceException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidParameterException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
}