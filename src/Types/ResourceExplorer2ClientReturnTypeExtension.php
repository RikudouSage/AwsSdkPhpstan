<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ResourceExplorer2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ResourceExplorer2\ResourceExplorer2Client>
     */
    public function getClass(): string
    {
        return \Aws\ResourceExplorer2\ResourceExplorer2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateDefaultView',
            'batchGetView',
            'createIndex',
            'createView',
            'deleteIndex',
            'deleteView',
            'disassociateDefaultView',
            'getAccountLevelServiceConfiguration',
            'getDefaultView',
            'getIndex',
            'getManagedView',
            'getView',
            'listIndexes',
            'listIndexesForMembers',
            'listManagedViews',
            'listResources',
            'listSupportedResourceTypes',
            'listTagsForResource',
            'listViews',
            'search',
            'tagResource',
            'untagResource',
            'updateIndexType',
            'updateView',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateDefaultView' => $this->associateDefaultView(),
            'batchGetView' => $this->batchGetView(),
            'createIndex' => $this->createIndex(),
            'createView' => $this->createView(),
            'deleteIndex' => $this->deleteIndex(),
            'deleteView' => $this->deleteView(),
            'disassociateDefaultView' => $this->disassociateDefaultView(),
            'getAccountLevelServiceConfiguration' => $this->getAccountLevelServiceConfiguration(),
            'getDefaultView' => $this->getDefaultView(),
            'getIndex' => $this->getIndex(),
            'getManagedView' => $this->getManagedView(),
            'getView' => $this->getView(),
            'listIndexes' => $this->listIndexes(),
            'listIndexesForMembers' => $this->listIndexesForMembers(),
            'listManagedViews' => $this->listManagedViews(),
            'listResources' => $this->listResources(),
            'listSupportedResourceTypes' => $this->listSupportedResourceTypes(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listViews' => $this->listViews(),
            'search' => $this->search(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateIndexType' => $this->updateIndexType(),
            'updateView' => $this->updateView(),
        };
    }
    private function associateDefaultView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ViewArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchGetView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('Views'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludedProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FilterString'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
            ]),
        ]);
    }
    private function createView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('View'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludedProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                    new \PHPStan\Type\Constant\ConstantStringType('ViewArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FilterString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
            ]),
        ]);
    }
    private function deleteView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ViewArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateDefaultView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getAccountLevelServiceConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrgConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWSServiceAccessStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceLinkedRole'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDefaultView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ViewArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatingFrom'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicatingTo'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('AGGREGATOR'),
                ]),
            ]),
        ]);
    }
    private function getManagedView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedView'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludedProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedViewArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedViewName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustedService'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FilterString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('View'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludedProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                    new \PHPStan\Type\Constant\ConstantStringType('ViewArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FilterString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listIndexes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Indexes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AGGREGATOR'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIndexesForMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Indexes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AGGREGATOR'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listManagedViews(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedViews'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('ViewArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastReportedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwningAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Service'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Data'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastReportedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSupportedResourceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTypes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Service'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listViews(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Views'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function search(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Count'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('ViewArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalResources'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastReportedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwningAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Service'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Data'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastReportedAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
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
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateIndexType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('AGGREGATOR'),
                ]),
            ]),
        ]);
    }
    private function updateView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('View'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludedProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                    new \PHPStan\Type\Constant\ConstantStringType('ViewArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FilterString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}