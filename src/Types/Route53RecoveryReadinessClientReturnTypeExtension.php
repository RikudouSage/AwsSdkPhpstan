<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class Route53RecoveryReadinessClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Route53RecoveryReadiness\Route53RecoveryReadinessClient>
     */
    public function getClass(): string
    {
        return \Aws\Route53RecoveryReadiness\Route53RecoveryReadinessClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createCell',
            'createCrossAccountAuthorization',
            'createReadinessCheck',
            'createRecoveryGroup',
            'createResourceSet',
            'deleteCell',
            'deleteCrossAccountAuthorization',
            'deleteReadinessCheck',
            'deleteRecoveryGroup',
            'deleteResourceSet',
            'getArchitectureRecommendations',
            'getCell',
            'getCellReadinessSummary',
            'getReadinessCheck',
            'getReadinessCheckResourceStatus',
            'getReadinessCheckStatus',
            'getRecoveryGroup',
            'getRecoveryGroupReadinessSummary',
            'getResourceSet',
            'listCells',
            'listCrossAccountAuthorizations',
            'listReadinessChecks',
            'listRecoveryGroups',
            'listResourceSets',
            'listRules',
            'listTagsForResources',
            'tagResource',
            'untagResource',
            'updateCell',
            'updateReadinessCheck',
            'updateRecoveryGroup',
            'updateResourceSet',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createCell' => $this->createCell(),
            'createCrossAccountAuthorization' => $this->createCrossAccountAuthorization(),
            'createReadinessCheck' => $this->createReadinessCheck(),
            'createRecoveryGroup' => $this->createRecoveryGroup(),
            'createResourceSet' => $this->createResourceSet(),
            'deleteCell' => $this->deleteCell(),
            'deleteCrossAccountAuthorization' => $this->deleteCrossAccountAuthorization(),
            'deleteReadinessCheck' => $this->deleteReadinessCheck(),
            'deleteRecoveryGroup' => $this->deleteRecoveryGroup(),
            'deleteResourceSet' => $this->deleteResourceSet(),
            'getArchitectureRecommendations' => $this->getArchitectureRecommendations(),
            'getCell' => $this->getCell(),
            'getCellReadinessSummary' => $this->getCellReadinessSummary(),
            'getReadinessCheck' => $this->getReadinessCheck(),
            'getReadinessCheckResourceStatus' => $this->getReadinessCheckResourceStatus(),
            'getReadinessCheckStatus' => $this->getReadinessCheckStatus(),
            'getRecoveryGroup' => $this->getRecoveryGroup(),
            'getRecoveryGroupReadinessSummary' => $this->getRecoveryGroupReadinessSummary(),
            'getResourceSet' => $this->getResourceSet(),
            'listCells' => $this->listCells(),
            'listCrossAccountAuthorizations' => $this->listCrossAccountAuthorizations(),
            'listReadinessChecks' => $this->listReadinessChecks(),
            'listRecoveryGroups' => $this->listRecoveryGroups(),
            'listResourceSets' => $this->listResourceSets(),
            'listRules' => $this->listRules(),
            'listTagsForResources' => $this->listTagsForResources(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCell' => $this->updateCell(),
            'updateReadinessCheck' => $this->updateReadinessCheck(),
            'updateRecoveryGroup' => $this->updateRecoveryGroup(),
            'updateResourceSet' => $this->updateResourceSet(),
        };
    }
    private function createCell(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CellArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CellName'),
                new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                new \PHPStan\Type\Constant\ConstantStringType('ParentReadinessScopes'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createCrossAccountAuthorization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossAccountAuthorization'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createReadinessCheck(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReadinessCheckArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ReadinessCheckName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSet'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createRecoveryGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createResourceSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetType'),
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ComponentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DnsTargetResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadinessScopes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('HostedZoneArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordSetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetResource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NLBResource'),
                                new \PHPStan\Type\Constant\ConstantStringType('R53Resource'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RecordSetId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deleteCell(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCrossAccountAuthorization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteReadinessCheck(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRecoveryGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteResourceSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getArchitectureRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LastAuditTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Recommendations'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecommendationText'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getCell(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CellArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CellName'),
                new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                new \PHPStan\Type\Constant\ConstantStringType('ParentReadinessScopes'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getCellReadinessSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Readiness'),
                new \PHPStan\Type\Constant\ConstantStringType('ReadinessChecks'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Readiness'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadinessCheckName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getReadinessCheck(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReadinessCheckArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ReadinessCheckName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSet'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getReadinessCheckResourceStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Readiness'),
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastCheckedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Messages'),
                        new \PHPStan\Type\Constant\ConstantStringType('Readiness'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MessageText'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getReadinessCheckStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Messages'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Readiness'),
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MessageText'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ComponentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastCheckedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Readiness'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getRecoveryGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getRecoveryGroupReadinessSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Readiness'),
                new \PHPStan\Type\Constant\ConstantStringType('ReadinessChecks'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Readiness'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadinessCheckName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getResourceSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetType'),
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ComponentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DnsTargetResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadinessScopes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('HostedZoneArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordSetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetResource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NLBResource'),
                                new \PHPStan\Type\Constant\ConstantStringType('R53Resource'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RecordSetId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listCells(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CellArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CellName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentReadinessScopes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCrossAccountAuthorizations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossAccountAuthorizations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReadinessChecks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ReadinessChecks'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadinessCheckArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadinessCheckName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceSet'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listRecoveryGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listResourceSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceSetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceSetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceSetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ComponentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DnsTargetResource'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadinessScopes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RecordSetId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetResource'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NLBResource'),
                                        new \PHPStan\Type\Constant\ConstantStringType('R53Resource'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RecordSetId'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTagsForResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
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
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCell(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CellArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CellName'),
                new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                new \PHPStan\Type\Constant\ConstantStringType('ParentReadinessScopes'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateReadinessCheck(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReadinessCheckArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ReadinessCheckName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSet'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateRecoveryGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cells'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RecoveryGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateResourceSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceSetType'),
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ComponentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DnsTargetResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadinessScopes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('HostedZoneArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordSetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetResource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NLBResource'),
                                new \PHPStan\Type\Constant\ConstantStringType('R53Resource'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RecordSetId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
}