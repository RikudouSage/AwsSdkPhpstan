<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ImportExportClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ImportExport\ImportExportClient>
     */
    public function getClass(): string
    {
        return \Aws\ImportExport\ImportExportClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelJob',
            'createJob',
            'getShippingLabel',
            'getStatus',
            'listJobs',
            'updateJob',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelJob' => $this->cancelJob(),
            'createJob' => $this->createJob(),
            'getShippingLabel' => $this->getShippingLabel(),
            'getStatus' => $this->getStatus(),
            'listJobs' => $this->listJobs(),
            'updateJob' => $this->updateJob(),
        };
    }
    private function cancelJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Success'),
            ], [
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                new \PHPStan\Type\Constant\ConstantStringType('SignatureFileContents'),
                new \PHPStan\Type\Constant\ConstantStringType('WarningMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('ArtifactList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Import'),
                    new \PHPStan\Type\Constant\ConstantStringType('Export'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('URL'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getShippingLabel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ShippingLabelURL'),
                new \PHPStan\Type\Constant\ConstantStringType('Warning'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationCode'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('ProgressCode'),
                new \PHPStan\Type\Constant\ConstantStringType('ProgressMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('Carrier'),
                new \PHPStan\Type\Constant\ConstantStringType('TrackingNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('LogBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('LogKey'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorCount'),
                new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                new \PHPStan\Type\Constant\ConstantStringType('SignatureFileContents'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentManifest'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ArtifactList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Import'),
                    new \PHPStan\Type\Constant\ConstantStringType('Export'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('URL'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsCanceled'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Import'),
                        new \PHPStan\Type\Constant\ConstantStringType('Export'),
                    ]),
                ]),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function updateJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Success'),
                new \PHPStan\Type\Constant\ConstantStringType('WarningMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('ArtifactList'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('URL'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}