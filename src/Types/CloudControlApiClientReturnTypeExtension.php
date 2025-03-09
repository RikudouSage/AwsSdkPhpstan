<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CloudControlApiClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CloudControlApi\CloudControlApiClient>
     */
    public function getClass(): string
    {
        return \Aws\CloudControlApi\CloudControlApiClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelResourceRequest',
            'createResource',
            'deleteResource',
            'getResource',
            'getResourceRequestStatus',
            'listResourceRequests',
            'listResources',
            'updateResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelResourceRequest' => $this->cancelResourceRequest(),
            'createResource' => $this->createResource(),
            'deleteResource' => $this->deleteResource(),
            'getResource' => $this->getResource(),
            'getResourceRequestStatus' => $this->getResourceRequestStatus(),
            'listResourceRequests' => $this->listResourceRequests(),
            'listResources' => $this->listResources(),
            'updateResource' => $this->updateResource(),
        };
    }
    private function cancelResourceRequest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProgressEvent'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('HooksRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetryAfter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotUpdatable'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnauthorizedTaggingOperation'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlreadyExists'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceConflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStabilized'),
                        new \PHPStan\Type\Constant\ConstantStringType('GeneralServiceException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceInternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProgressEvent'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('HooksRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetryAfter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotUpdatable'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnauthorizedTaggingOperation'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlreadyExists'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceConflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStabilized'),
                        new \PHPStan\Type\Constant\ConstantStringType('GeneralServiceException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceInternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProgressEvent'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('HooksRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetryAfter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotUpdatable'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnauthorizedTaggingOperation'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlreadyExists'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceConflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStabilized'),
                        new \PHPStan\Type\Constant\ConstantStringType('GeneralServiceException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceInternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceDescription'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getResourceRequestStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProgressEvent'),
                new \PHPStan\Type\Constant\ConstantStringType('HooksProgressEvent'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('HooksRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetryAfter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotUpdatable'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnauthorizedTaggingOperation'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlreadyExists'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceConflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStabilized'),
                        new \PHPStan\Type\Constant\ConstantStringType('GeneralServiceException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceInternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HookTypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('HookTypeVersionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HookTypeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvocationPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('HookStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('HookEventTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('HookStatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listResourceRequests(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceRequestStatusSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('HooksRequestToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                        new \PHPStan\Type\Constant\ConstantStringType('OperationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetryAfter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NotUpdatable'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnauthorizedTaggingOperation'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidCredentials'),
                            new \PHPStan\Type\Constant\ConstantStringType('AlreadyExists'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceLimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotStabilized'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeneralServiceException'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceInternalError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceDescriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProgressEvent'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('HooksRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetryAfter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotUpdatable'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnauthorizedTaggingOperation'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlreadyExists'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceConflict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throttling'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceLimitExceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStabilized'),
                        new \PHPStan\Type\Constant\ConstantStringType('GeneralServiceException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceInternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
}