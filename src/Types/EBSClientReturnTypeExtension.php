<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class EBSClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\EBS\EBSClient>
     */
    public function getClass(): string
    {
        return \Aws\EBS\EBSClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'completeSnapshot',
            'getSnapshotBlock',
            'listChangedBlocks',
            'listSnapshotBlocks',
            'putSnapshotBlock',
            'startSnapshot',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'completeSnapshot' => $this->completeSnapshot(),
            'getSnapshotBlock' => $this->getSnapshotBlock(),
            'listChangedBlocks' => $this->listChangedBlocks(),
            'listSnapshotBlocks' => $this->listSnapshotBlocks(),
            'putSnapshotBlock' => $this->putSnapshotBlock(),
            'startSnapshot' => $this->startSnapshot(),
        };
    }
    private function completeSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ]),
            ]),
        ]);
    }
    private function getSnapshotBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataLength'),
                new \PHPStan\Type\Constant\ConstantStringType('BlockData'),
                new \PHPStan\Type\Constant\ConstantStringType('Checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumAlgorithm'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
            ]),
        ]);
    }
    private function listChangedBlocks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangedBlocks'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpiryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                new \PHPStan\Type\Constant\ConstantStringType('BlockSize'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BlockIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('FirstBlockToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecondBlockToken'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSnapshotBlocks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Blocks'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpiryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                new \PHPStan\Type\Constant\ConstantStringType('BlockSize'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BlockIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('BlockToken'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putSnapshotBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumAlgorithm'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
            ]),
        ]);
    }
    private function startSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                new \PHPStan\Type\Constant\ConstantStringType('BlockSize'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('ParentSnapshotId'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SseType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('sse-ebs'),
                    new \PHPStan\Type\Constant\ConstantStringType('sse-kms'),
                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                ]),
            ]),
        ]);
    }
}