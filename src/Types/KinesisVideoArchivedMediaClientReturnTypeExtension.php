<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class KinesisVideoArchivedMediaClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\KinesisVideoArchivedMedia\KinesisVideoArchivedMediaClient>
     */
    public function getClass(): string
    {
        return \Aws\KinesisVideoArchivedMedia\KinesisVideoArchivedMediaClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'getClip',
            'getDASHStreamingSessionURL',
            'getHLSStreamingSessionURL',
            'getImages',
            'getMediaForFragmentList',
            'listFragments',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'getClip' => $this->getClip(),
            'getDASHStreamingSessionURL' => $this->getDASHStreamingSessionURL(),
            'getHLSStreamingSessionURL' => $this->getHLSStreamingSessionURL(),
            'getImages' => $this->getImages(),
            'getMediaForFragmentList' => $this->getMediaForFragmentList(),
            'listFragments' => $this->listFragments(),
        };
    }
    private function getClip(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('Payload'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getDASHStreamingSessionURL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DASHStreamingSessionURL'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getHLSStreamingSessionURL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HLSStreamingSessionURL'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getImages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Images'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageContent'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NO_MEDIA'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIA_ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMediaForFragmentList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('Payload'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function listFragments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Fragments'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FragmentNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('FragmentSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProducerTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('FragmentLengthInMilliseconds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}