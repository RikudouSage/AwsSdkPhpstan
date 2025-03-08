<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MailManagerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MailManager\MailManagerClient>
     */
    public function getClass(): string
    {
        return \Aws\MailManager\MailManagerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createAddonInstance',
            'createAddonSubscription',
            'createAddressList',
            'createAddressListImportJob',
            'createArchive',
            'createIngressPoint',
            'createRelay',
            'createRuleSet',
            'createTrafficPolicy',
            'deleteAddonInstance',
            'deleteAddonSubscription',
            'deleteAddressList',
            'deleteArchive',
            'deleteIngressPoint',
            'deleteRelay',
            'deleteRuleSet',
            'deleteTrafficPolicy',
            'deregisterMemberFromAddressList',
            'getAddonInstance',
            'getAddonSubscription',
            'getAddressList',
            'getAddressListImportJob',
            'getArchive',
            'getArchiveExport',
            'getArchiveMessage',
            'getArchiveMessageContent',
            'getArchiveSearch',
            'getArchiveSearchResults',
            'getIngressPoint',
            'getMemberOfAddressList',
            'getRelay',
            'getRuleSet',
            'getTrafficPolicy',
            'listAddonInstances',
            'listAddonSubscriptions',
            'listAddressListImportJobs',
            'listAddressLists',
            'listArchiveExports',
            'listArchiveSearches',
            'listArchives',
            'listIngressPoints',
            'listMembersOfAddressList',
            'listRelays',
            'listRuleSets',
            'listTagsForResource',
            'listTrafficPolicies',
            'registerMemberToAddressList',
            'startAddressListImportJob',
            'startArchiveExport',
            'startArchiveSearch',
            'stopAddressListImportJob',
            'stopArchiveExport',
            'stopArchiveSearch',
            'tagResource',
            'untagResource',
            'updateArchive',
            'updateIngressPoint',
            'updateRelay',
            'updateRuleSet',
            'updateTrafficPolicy',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createAddonInstance' => $this->createAddonInstance(),
            'createAddonSubscription' => $this->createAddonSubscription(),
            'createAddressList' => $this->createAddressList(),
            'createAddressListImportJob' => $this->createAddressListImportJob(),
            'createArchive' => $this->createArchive(),
            'createIngressPoint' => $this->createIngressPoint(),
            'createRelay' => $this->createRelay(),
            'createRuleSet' => $this->createRuleSet(),
            'createTrafficPolicy' => $this->createTrafficPolicy(),
            'deleteAddonInstance' => $this->deleteAddonInstance(),
            'deleteAddonSubscription' => $this->deleteAddonSubscription(),
            'deleteAddressList' => $this->deleteAddressList(),
            'deleteArchive' => $this->deleteArchive(),
            'deleteIngressPoint' => $this->deleteIngressPoint(),
            'deleteRelay' => $this->deleteRelay(),
            'deleteRuleSet' => $this->deleteRuleSet(),
            'deleteTrafficPolicy' => $this->deleteTrafficPolicy(),
            'deregisterMemberFromAddressList' => $this->deregisterMemberFromAddressList(),
            'getAddonInstance' => $this->getAddonInstance(),
            'getAddonSubscription' => $this->getAddonSubscription(),
            'getAddressList' => $this->getAddressList(),
            'getAddressListImportJob' => $this->getAddressListImportJob(),
            'getArchive' => $this->getArchive(),
            'getArchiveExport' => $this->getArchiveExport(),
            'getArchiveMessage' => $this->getArchiveMessage(),
            'getArchiveMessageContent' => $this->getArchiveMessageContent(),
            'getArchiveSearch' => $this->getArchiveSearch(),
            'getArchiveSearchResults' => $this->getArchiveSearchResults(),
            'getIngressPoint' => $this->getIngressPoint(),
            'getMemberOfAddressList' => $this->getMemberOfAddressList(),
            'getRelay' => $this->getRelay(),
            'getRuleSet' => $this->getRuleSet(),
            'getTrafficPolicy' => $this->getTrafficPolicy(),
            'listAddonInstances' => $this->listAddonInstances(),
            'listAddonSubscriptions' => $this->listAddonSubscriptions(),
            'listAddressListImportJobs' => $this->listAddressListImportJobs(),
            'listAddressLists' => $this->listAddressLists(),
            'listArchiveExports' => $this->listArchiveExports(),
            'listArchiveSearches' => $this->listArchiveSearches(),
            'listArchives' => $this->listArchives(),
            'listIngressPoints' => $this->listIngressPoints(),
            'listMembersOfAddressList' => $this->listMembersOfAddressList(),
            'listRelays' => $this->listRelays(),
            'listRuleSets' => $this->listRuleSets(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTrafficPolicies' => $this->listTrafficPolicies(),
            'registerMemberToAddressList' => $this->registerMemberToAddressList(),
            'startAddressListImportJob' => $this->startAddressListImportJob(),
            'startArchiveExport' => $this->startArchiveExport(),
            'startArchiveSearch' => $this->startArchiveSearch(),
            'stopAddressListImportJob' => $this->stopAddressListImportJob(),
            'stopArchiveExport' => $this->stopArchiveExport(),
            'stopArchiveSearch' => $this->stopArchiveSearch(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateArchive' => $this->updateArchive(),
            'updateIngressPoint' => $this->updateIngressPoint(),
            'updateRelay' => $this->updateRelay(),
            'updateRuleSet' => $this->updateRuleSet(),
            'updateTrafficPolicy' => $this->updateTrafficPolicy(),
        };
    }
    private function createAddonInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddonInstanceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAddonSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddonSubscriptionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAddressList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddressListId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAddressListImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('PreSignedUrl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createArchive(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createIngressPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IngressPointId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRelay(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RelayId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RuleSetId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTrafficPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAddonInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAddonSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAddressList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteArchive(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteIngressPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRelay(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTrafficPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterMemberFromAddressList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAddonInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddonInstanceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AddonName'),
                new \PHPStan\Type\Constant\ConstantStringType('AddonSubscriptionId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getAddonSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddonName'),
                new \PHPStan\Type\Constant\ConstantStringType('AddonSubscriptionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getAddressList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddressListArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AddressListId'),
                new \PHPStan\Type\Constant\ConstantStringType('AddressListName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getAddressListImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddressListId'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedItemsCount'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportDataFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportedItemsCount'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('PreSignedUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ImportDataType'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function getArchive(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveId'),
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveName'),
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveState'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Retention'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('THREE_MONTHS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIX_MONTHS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NINE_MONTHS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONE_YEAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('EIGHTEEN_MONTHS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TWO_YEARS'),
                        new \PHPStan\Type\Constant\ConstantStringType('THIRTY_MONTHS'),
                        new \PHPStan\Type\Constant\ConstantStringType('THREE_YEARS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOUR_YEARS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FIVE_YEARS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIX_YEARS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEVEN_YEARS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EIGHT_YEARS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NINE_YEARS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEN_YEARS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PERMANENT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getArchiveExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveId'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportDestinationConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                new \PHPStan\Type\Constant\ConstantStringType('FromTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ToTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Include'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unless'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BooleanExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('HAS_ATTACHMENTS'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IS_TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IS_FALSE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FROM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBJECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENVELOPE_TO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENVELOPE_FROM'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BooleanExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('HAS_ATTACHMENTS'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IS_TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IS_FALSE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FROM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBJECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENVELOPE_TO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENVELOPE_FROM'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmissionTimestamp'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getArchiveMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Envelope'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageDownloadLink'),
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('From'),
                    new \PHPStan\Type\Constant\ConstantStringType('Helo'),
                    new \PHPStan\Type\Constant\ConstantStringType('To'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSet'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressPointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderHostname'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('SendingMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('SendingPool'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceIdentity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TlsCipherSuite'),
                    new \PHPStan\Type\Constant\ConstantStringType('TlsProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getArchiveMessageContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Body'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Html'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageMalformed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getArchiveSearch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveId'),
                new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                new \PHPStan\Type\Constant\ConstantStringType('FromTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ToTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Include'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unless'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BooleanExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('HAS_ATTACHMENTS'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IS_TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IS_FALSE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FROM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBJECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENVELOPE_TO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENVELOPE_FROM'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BooleanExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('HAS_ATTACHMENTS'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IS_TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IS_FALSE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FROM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBJECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENVELOPE_TO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENVELOPE_FROM'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmissionTimestamp'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getArchiveSearchResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rows'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ArchivedMessageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cc'),
                    new \PHPStan\Type\Constant\ConstantStringType('Date'),
                    new \PHPStan\Type\Constant\ConstantStringType('Envelope'),
                    new \PHPStan\Type\Constant\ConstantStringType('From'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasAttachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('InReplyTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressPointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceivedHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceivedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderHostname'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                    new \PHPStan\Type\Constant\ConstantStringType('To'),
                    new \PHPStan\Type\Constant\ConstantStringType('XMailer'),
                    new \PHPStan\Type\Constant\ConstantStringType('XOriginalMailer'),
                    new \PHPStan\Type\Constant\ConstantStringType('XPriority'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('From'),
                        new \PHPStan\Type\Constant\ConstantStringType('Helo'),
                        new \PHPStan\Type\Constant\ConstantStringType('To'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
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
    private function getIngressPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ARecord'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('IngressPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IngressPointAuthConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('IngressPointId'),
                new \PHPStan\Type\Constant\ConstantStringType('IngressPointName'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyId'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IngressPointPasswordConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreviousSmtpPasswordExpiryTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreviousSmtpPasswordVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('SmtpPasswordVersion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTH'),
                ]),
            ]),
        ]);
    }
    private function getMemberOfAddressList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getRelay(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Authentication'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('RelayArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RelayId'),
                new \PHPStan\Type\Constant\ConstantStringType('RelayName'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerName'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerPort'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NoAuthentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Conditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unless'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AddHeader'),
                        new \PHPStan\Type\Constant\ConstantStringType('Archive'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeliverToMailbox'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeliverToQBusiness'),
                        new \PHPStan\Type\Constant\ConstantStringType('Drop'),
                        new \PHPStan\Type\Constant\ConstantStringType('Relay'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplaceRecipient'),
                        new \PHPStan\Type\Constant\ConstantStringType('Send'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteToS3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionFailurePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetArchive'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionFailurePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('MailboxArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionFailurePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionFailurePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('MailFrom'),
                            new \PHPStan\Type\Constant\ConstantStringType('Relay'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PRESERVE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReplaceWith'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionFailurePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActionFailurePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3SseKmsKeyId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BooleanExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('DmarcExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerdictExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                                new \PHPStan\Type\Constant\ConstantStringType('IsInAddressList'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('READ_RECEIPT_REQUESTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS_WRAPPED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AddressLists'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RECIPIENT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MAIL_FROM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SENDER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FROM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TO'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CC'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IS_TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IS_FALSE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUARANTINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REJECT'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE_IP'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CIDR_MATCHES'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CIDR_MATCHES'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_SIZE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                                new \PHPStan\Type\Constant\ConstantStringType('MimeHeaderAttribute'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MAIL_FROM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HELO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RECIPIENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SENDER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FROM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBJECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CC'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Analysis'),
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Analyzer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResultField'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DKIM'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_FAILED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BooleanExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('DmarcExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerdictExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                                new \PHPStan\Type\Constant\ConstantStringType('IsInAddressList'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('READ_RECEIPT_REQUESTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TLS_WRAPPED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AddressLists'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RECIPIENT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MAIL_FROM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SENDER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FROM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TO'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CC'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IS_TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IS_FALSE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUARANTINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REJECT'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE_IP'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CIDR_MATCHES'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CIDR_MATCHES'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_SIZE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                                new \PHPStan\Type\Constant\ConstantStringType('MimeHeaderAttribute'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MAIL_FROM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HELO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RECIPIENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SENDER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FROM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBJECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CC'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Analysis'),
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Analyzer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResultField'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DKIM'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('GRAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_FAILED'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getTrafficPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultAction'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxMessageSizeBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyStatements'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyId'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyName'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Conditions'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BooleanExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('TlsExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Analysis'),
                                new \PHPStan\Type\Constant\ConstantStringType('IsInAddressList'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Analyzer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResultField'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AddressLists'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('RECIPIENT'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IS_TRUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IS_FALSE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('SENDER_IP'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CIDR_MATCHES'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CIDR_MATCHES'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('RECIPIENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('TLS_PROTOCOL'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MINIMUM_TLS_VERSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('IS'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TLS1_2'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLS1_3'),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAddonInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddonInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AddonInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddonInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddonName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddonSubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAddonSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddonSubscriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AddonName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddonSubscriptionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddonSubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAddressListImportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImportJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AddressListId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedItemsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportDataFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedItemsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreSignedUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ImportDataType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAddressLists(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AddressLists'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AddressListArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressListId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressListName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listArchiveExports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Exports'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExportId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmissionTimestamp'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREPROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listArchiveSearches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Searches'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SearchId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmissionTimestamp'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listArchives(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Archives'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ArchiveId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchiveName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchiveState'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIngressPoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IngressPoints'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ARecord'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressPointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressPointName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTH'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMembersOfAddressList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Addresses'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRelays(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Relays'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelayName'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listRuleSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleSets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleSetName'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function listTrafficPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicies'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyName'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function registerMemberToAddressList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startAddressListImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startArchiveExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startArchiveSearch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SearchId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopAddressListImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopArchiveExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopArchiveSearch(): ?\PHPStan\Type\Type
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
    private function updateArchive(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateIngressPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRelay(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRuleSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateTrafficPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}