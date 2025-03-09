<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SagemakerEdgeManagerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SagemakerEdgeManager\SagemakerEdgeManagerClient>
     */
    public function getClass(): string
    {
        return \Aws\SagemakerEdgeManager\SagemakerEdgeManagerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'getDeployments',
            'getDeviceRegistration',
            'sendHeartbeat',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'getDeployments' => $this->getDeployments(),
            'getDeviceRegistration' => $this->getDeviceRegistration(),
            'sendHeartbeat' => $this->sendHeartbeat(),
        };
    }
    private function getDeployments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Deployments'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureHandlingPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definitions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Model'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_ON_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DO_NOTHING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ModelHandle'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('Checksum'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNDEPLOY'),
                        ]),
                    ])),
                ])),
            ]),
        ]);
    }
    private function getDeviceRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeviceRegistration'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheTTL'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendHeartbeat(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}