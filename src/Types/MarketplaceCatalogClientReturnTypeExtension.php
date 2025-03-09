<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MarketplaceCatalogClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MarketplaceCatalog\MarketplaceCatalogClient>
     */
    public function getClass(): string
    {
        return \Aws\MarketplaceCatalog\MarketplaceCatalogClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchDescribeEntities',
            'cancelChangeSet',
            'deleteResourcePolicy',
            'describeChangeSet',
            'describeEntity',
            'getResourcePolicy',
            'listChangeSets',
            'listEntities',
            'listTagsForResource',
            'putResourcePolicy',
            'startChangeSet',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchDescribeEntities' => $this->batchDescribeEntities(),
            'cancelChangeSet' => $this->cancelChangeSet(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'describeChangeSet' => $this->describeChangeSet(),
            'describeEntity' => $this->describeEntity(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'listChangeSets' => $this->listChangeSets(),
            'listEntities' => $this->listEntities(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'startChangeSet' => $this->startChangeSet(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function batchDescribeEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EntityDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EntityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailsDocument'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function cancelChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('Intent'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('FailureDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSet'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('APPLY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                    new \PHPStan\Type\Constant\ConstantStringType('APPLYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SERVER_FAULT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailsDocument'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDetailList'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeEntity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EntityType'),
                new \PHPStan\Type\Constant\ConstantStringType('EntityIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('EntityArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Details'),
                new \PHPStan\Type\Constant\ConstantStringType('DetailsDocument'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listChangeSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeSetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityIdList'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER_FAULT'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EntitySummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('AmiProductSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContainerProductSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataProductSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('SaaSProductSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResaleAuthorizationSummary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProductTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Limited'),
                            new \PHPStan\Type\Constant\ConstantStringType('Public'),
                            new \PHPStan\Type\Constant\ConstantStringType('Restricted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProductTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Limited'),
                            new \PHPStan\Type\Constant\ConstantStringType('Public'),
                            new \PHPStan\Type\Constant\ConstantStringType('Restricted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProductTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Limited'),
                            new \PHPStan\Type\Constant\ConstantStringType('Public'),
                            new \PHPStan\Type\Constant\ConstantStringType('Restricted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unavailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProductTitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Limited'),
                            new \PHPStan\Type\Constant\ConstantStringType('Public'),
                            new \PHPStan\Type\Constant\ConstantStringType('Restricted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResaleAuthorizationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReleaseDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityEndDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('BuyerAccounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targeting'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                            new \PHPStan\Type\Constant\ConstantStringType('Released'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BuyerAccounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParticipatingPrograms'),
                            new \PHPStan\Type\Constant\ConstantStringType('CountryCodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManufacturerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManufacturerLegalName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResellerAccountID'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResellerLegalName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('OfferExtendedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityEndDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Draft'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Restricted'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetArn'),
            ], [
                new \PHPStan\Type\StringType(),
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
}