<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class RedshiftClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Redshift\RedshiftClient>
     */
    public function getClass(): string
    {
        return \Aws\Redshift\RedshiftClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptReservedNodeExchange',
            'addPartner',
            'associateDataShareConsumer',
            'authorizeClusterSecurityGroupIngress',
            'authorizeDataShare',
            'authorizeEndpointAccess',
            'authorizeSnapshotAccess',
            'batchDeleteClusterSnapshots',
            'batchModifyClusterSnapshots',
            'cancelResize',
            'copyClusterSnapshot',
            'createAuthenticationProfile',
            'createCluster',
            'createClusterParameterGroup',
            'createClusterSecurityGroup',
            'createClusterSnapshot',
            'createClusterSubnetGroup',
            'createCustomDomainAssociation',
            'createEndpointAccess',
            'createEventSubscription',
            'createHsmClientCertificate',
            'createHsmConfiguration',
            'createIntegration',
            'createRedshiftIdcApplication',
            'createScheduledAction',
            'createSnapshotCopyGrant',
            'createSnapshotSchedule',
            'createTags',
            'createUsageLimit',
            'deauthorizeDataShare',
            'deleteAuthenticationProfile',
            'deleteCluster',
            'deleteClusterParameterGroup',
            'deleteClusterSecurityGroup',
            'deleteClusterSnapshot',
            'deleteClusterSubnetGroup',
            'deleteCustomDomainAssociation',
            'deleteEndpointAccess',
            'deleteEventSubscription',
            'deleteHsmClientCertificate',
            'deleteHsmConfiguration',
            'deleteIntegration',
            'deletePartner',
            'deleteRedshiftIdcApplication',
            'deleteResourcePolicy',
            'deleteScheduledAction',
            'deleteSnapshotCopyGrant',
            'deleteSnapshotSchedule',
            'deleteTags',
            'deleteUsageLimit',
            'deregisterNamespace',
            'describeAccountAttributes',
            'describeAuthenticationProfiles',
            'describeClusterDbRevisions',
            'describeClusterParameterGroups',
            'describeClusterParameters',
            'describeClusterSecurityGroups',
            'describeClusterSnapshots',
            'describeClusterSubnetGroups',
            'describeClusterTracks',
            'describeClusterVersions',
            'describeClusters',
            'describeCustomDomainAssociations',
            'describeDataShares',
            'describeDataSharesForConsumer',
            'describeDataSharesForProducer',
            'describeDefaultClusterParameters',
            'describeEndpointAccess',
            'describeEndpointAuthorization',
            'describeEventCategories',
            'describeEventSubscriptions',
            'describeEvents',
            'describeHsmClientCertificates',
            'describeHsmConfigurations',
            'describeInboundIntegrations',
            'describeIntegrations',
            'describeLoggingStatus',
            'describeNodeConfigurationOptions',
            'describeOrderableClusterOptions',
            'describePartners',
            'describeRedshiftIdcApplications',
            'describeReservedNodeExchangeStatus',
            'describeReservedNodeOfferings',
            'describeReservedNodes',
            'describeResize',
            'describeScheduledActions',
            'describeSnapshotCopyGrants',
            'describeSnapshotSchedules',
            'describeStorage',
            'describeTableRestoreStatus',
            'describeTags',
            'describeUsageLimits',
            'disableLogging',
            'disableSnapshotCopy',
            'disassociateDataShareConsumer',
            'enableLogging',
            'enableSnapshotCopy',
            'failoverPrimaryCompute',
            'getClusterCredentials',
            'getClusterCredentialsWithIAM',
            'getReservedNodeExchangeConfigurationOptions',
            'getReservedNodeExchangeOfferings',
            'getResourcePolicy',
            'listRecommendations',
            'modifyAquaConfiguration',
            'modifyAuthenticationProfile',
            'modifyCluster',
            'modifyClusterDbRevision',
            'modifyClusterIamRoles',
            'modifyClusterMaintenance',
            'modifyClusterParameterGroup',
            'modifyClusterSnapshot',
            'modifyClusterSnapshotSchedule',
            'modifyClusterSubnetGroup',
            'modifyCustomDomainAssociation',
            'modifyEndpointAccess',
            'modifyEventSubscription',
            'modifyIntegration',
            'modifyRedshiftIdcApplication',
            'modifyScheduledAction',
            'modifySnapshotCopyRetentionPeriod',
            'modifySnapshotSchedule',
            'modifyUsageLimit',
            'pauseCluster',
            'purchaseReservedNodeOffering',
            'putResourcePolicy',
            'rebootCluster',
            'registerNamespace',
            'rejectDataShare',
            'resetClusterParameterGroup',
            'resizeCluster',
            'restoreFromClusterSnapshot',
            'restoreTableFromClusterSnapshot',
            'resumeCluster',
            'revokeClusterSecurityGroupIngress',
            'revokeEndpointAccess',
            'revokeSnapshotAccess',
            'rotateEncryptionKey',
            'updatePartnerStatus',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptReservedNodeExchange' => $this->acceptReservedNodeExchange(),
            'addPartner' => $this->addPartner(),
            'associateDataShareConsumer' => $this->associateDataShareConsumer(),
            'authorizeClusterSecurityGroupIngress' => $this->authorizeClusterSecurityGroupIngress(),
            'authorizeDataShare' => $this->authorizeDataShare(),
            'authorizeEndpointAccess' => $this->authorizeEndpointAccess(),
            'authorizeSnapshotAccess' => $this->authorizeSnapshotAccess(),
            'batchDeleteClusterSnapshots' => $this->batchDeleteClusterSnapshots(),
            'batchModifyClusterSnapshots' => $this->batchModifyClusterSnapshots(),
            'cancelResize' => $this->cancelResize(),
            'copyClusterSnapshot' => $this->copyClusterSnapshot(),
            'createAuthenticationProfile' => $this->createAuthenticationProfile(),
            'createCluster' => $this->createCluster(),
            'createClusterParameterGroup' => $this->createClusterParameterGroup(),
            'createClusterSecurityGroup' => $this->createClusterSecurityGroup(),
            'createClusterSnapshot' => $this->createClusterSnapshot(),
            'createClusterSubnetGroup' => $this->createClusterSubnetGroup(),
            'createCustomDomainAssociation' => $this->createCustomDomainAssociation(),
            'createEndpointAccess' => $this->createEndpointAccess(),
            'createEventSubscription' => $this->createEventSubscription(),
            'createHsmClientCertificate' => $this->createHsmClientCertificate(),
            'createHsmConfiguration' => $this->createHsmConfiguration(),
            'createIntegration' => $this->createIntegration(),
            'createRedshiftIdcApplication' => $this->createRedshiftIdcApplication(),
            'createScheduledAction' => $this->createScheduledAction(),
            'createSnapshotCopyGrant' => $this->createSnapshotCopyGrant(),
            'createSnapshotSchedule' => $this->createSnapshotSchedule(),
            'createTags' => $this->createTags(),
            'createUsageLimit' => $this->createUsageLimit(),
            'deauthorizeDataShare' => $this->deauthorizeDataShare(),
            'deleteAuthenticationProfile' => $this->deleteAuthenticationProfile(),
            'deleteCluster' => $this->deleteCluster(),
            'deleteClusterParameterGroup' => $this->deleteClusterParameterGroup(),
            'deleteClusterSecurityGroup' => $this->deleteClusterSecurityGroup(),
            'deleteClusterSnapshot' => $this->deleteClusterSnapshot(),
            'deleteClusterSubnetGroup' => $this->deleteClusterSubnetGroup(),
            'deleteCustomDomainAssociation' => $this->deleteCustomDomainAssociation(),
            'deleteEndpointAccess' => $this->deleteEndpointAccess(),
            'deleteEventSubscription' => $this->deleteEventSubscription(),
            'deleteHsmClientCertificate' => $this->deleteHsmClientCertificate(),
            'deleteHsmConfiguration' => $this->deleteHsmConfiguration(),
            'deleteIntegration' => $this->deleteIntegration(),
            'deletePartner' => $this->deletePartner(),
            'deleteRedshiftIdcApplication' => $this->deleteRedshiftIdcApplication(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteScheduledAction' => $this->deleteScheduledAction(),
            'deleteSnapshotCopyGrant' => $this->deleteSnapshotCopyGrant(),
            'deleteSnapshotSchedule' => $this->deleteSnapshotSchedule(),
            'deleteTags' => $this->deleteTags(),
            'deleteUsageLimit' => $this->deleteUsageLimit(),
            'deregisterNamespace' => $this->deregisterNamespace(),
            'describeAccountAttributes' => $this->describeAccountAttributes(),
            'describeAuthenticationProfiles' => $this->describeAuthenticationProfiles(),
            'describeClusterDbRevisions' => $this->describeClusterDbRevisions(),
            'describeClusterParameterGroups' => $this->describeClusterParameterGroups(),
            'describeClusterParameters' => $this->describeClusterParameters(),
            'describeClusterSecurityGroups' => $this->describeClusterSecurityGroups(),
            'describeClusterSnapshots' => $this->describeClusterSnapshots(),
            'describeClusterSubnetGroups' => $this->describeClusterSubnetGroups(),
            'describeClusterTracks' => $this->describeClusterTracks(),
            'describeClusterVersions' => $this->describeClusterVersions(),
            'describeClusters' => $this->describeClusters(),
            'describeCustomDomainAssociations' => $this->describeCustomDomainAssociations(),
            'describeDataShares' => $this->describeDataShares(),
            'describeDataSharesForConsumer' => $this->describeDataSharesForConsumer(),
            'describeDataSharesForProducer' => $this->describeDataSharesForProducer(),
            'describeDefaultClusterParameters' => $this->describeDefaultClusterParameters(),
            'describeEndpointAccess' => $this->describeEndpointAccess(),
            'describeEndpointAuthorization' => $this->describeEndpointAuthorization(),
            'describeEventCategories' => $this->describeEventCategories(),
            'describeEventSubscriptions' => $this->describeEventSubscriptions(),
            'describeEvents' => $this->describeEvents(),
            'describeHsmClientCertificates' => $this->describeHsmClientCertificates(),
            'describeHsmConfigurations' => $this->describeHsmConfigurations(),
            'describeInboundIntegrations' => $this->describeInboundIntegrations(),
            'describeIntegrations' => $this->describeIntegrations(),
            'describeLoggingStatus' => $this->describeLoggingStatus(),
            'describeNodeConfigurationOptions' => $this->describeNodeConfigurationOptions(),
            'describeOrderableClusterOptions' => $this->describeOrderableClusterOptions(),
            'describePartners' => $this->describePartners(),
            'describeRedshiftIdcApplications' => $this->describeRedshiftIdcApplications(),
            'describeReservedNodeExchangeStatus' => $this->describeReservedNodeExchangeStatus(),
            'describeReservedNodeOfferings' => $this->describeReservedNodeOfferings(),
            'describeReservedNodes' => $this->describeReservedNodes(),
            'describeResize' => $this->describeResize(),
            'describeScheduledActions' => $this->describeScheduledActions(),
            'describeSnapshotCopyGrants' => $this->describeSnapshotCopyGrants(),
            'describeSnapshotSchedules' => $this->describeSnapshotSchedules(),
            'describeStorage' => $this->describeStorage(),
            'describeTableRestoreStatus' => $this->describeTableRestoreStatus(),
            'describeTags' => $this->describeTags(),
            'describeUsageLimits' => $this->describeUsageLimits(),
            'disableLogging' => $this->disableLogging(),
            'disableSnapshotCopy' => $this->disableSnapshotCopy(),
            'disassociateDataShareConsumer' => $this->disassociateDataShareConsumer(),
            'enableLogging' => $this->enableLogging(),
            'enableSnapshotCopy' => $this->enableSnapshotCopy(),
            'failoverPrimaryCompute' => $this->failoverPrimaryCompute(),
            'getClusterCredentials' => $this->getClusterCredentials(),
            'getClusterCredentialsWithIAM' => $this->getClusterCredentialsWithIAM(),
            'getReservedNodeExchangeConfigurationOptions' => $this->getReservedNodeExchangeConfigurationOptions(),
            'getReservedNodeExchangeOfferings' => $this->getReservedNodeExchangeOfferings(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'listRecommendations' => $this->listRecommendations(),
            'modifyAquaConfiguration' => $this->modifyAquaConfiguration(),
            'modifyAuthenticationProfile' => $this->modifyAuthenticationProfile(),
            'modifyCluster' => $this->modifyCluster(),
            'modifyClusterDbRevision' => $this->modifyClusterDbRevision(),
            'modifyClusterIamRoles' => $this->modifyClusterIamRoles(),
            'modifyClusterMaintenance' => $this->modifyClusterMaintenance(),
            'modifyClusterParameterGroup' => $this->modifyClusterParameterGroup(),
            'modifyClusterSnapshot' => $this->modifyClusterSnapshot(),
            'modifyClusterSnapshotSchedule' => $this->modifyClusterSnapshotSchedule(),
            'modifyClusterSubnetGroup' => $this->modifyClusterSubnetGroup(),
            'modifyCustomDomainAssociation' => $this->modifyCustomDomainAssociation(),
            'modifyEndpointAccess' => $this->modifyEndpointAccess(),
            'modifyEventSubscription' => $this->modifyEventSubscription(),
            'modifyIntegration' => $this->modifyIntegration(),
            'modifyRedshiftIdcApplication' => $this->modifyRedshiftIdcApplication(),
            'modifyScheduledAction' => $this->modifyScheduledAction(),
            'modifySnapshotCopyRetentionPeriod' => $this->modifySnapshotCopyRetentionPeriod(),
            'modifySnapshotSchedule' => $this->modifySnapshotSchedule(),
            'modifyUsageLimit' => $this->modifyUsageLimit(),
            'pauseCluster' => $this->pauseCluster(),
            'purchaseReservedNodeOffering' => $this->purchaseReservedNodeOffering(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'rebootCluster' => $this->rebootCluster(),
            'registerNamespace' => $this->registerNamespace(),
            'rejectDataShare' => $this->rejectDataShare(),
            'resetClusterParameterGroup' => $this->resetClusterParameterGroup(),
            'resizeCluster' => $this->resizeCluster(),
            'restoreFromClusterSnapshot' => $this->restoreFromClusterSnapshot(),
            'restoreTableFromClusterSnapshot' => $this->restoreTableFromClusterSnapshot(),
            'resumeCluster' => $this->resumeCluster(),
            'revokeClusterSecurityGroupIngress' => $this->revokeClusterSecurityGroupIngress(),
            'revokeEndpointAccess' => $this->revokeEndpointAccess(),
            'revokeSnapshotAccess' => $this->revokeSnapshotAccess(),
            'rotateEncryptionKey' => $this->rotateEncryptionKey(),
            'updatePartnerStatus' => $this->updatePartnerStatus(),
        };
    }
    private function acceptReservedNodeExchange(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExchangedReservedNode'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Regular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upgradable'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function addPartner(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                new \PHPStan\Type\Constant\ConstantStringType('PartnerName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateDataShareConsumer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataShareArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProducerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowPubliclyAccessibleConsumers'),
                new \PHPStan\Type\Constant\ConstantStringType('DataShareAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('ManagedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('DataShareType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusChangeDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProducerAllowedWrites'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerAcceptedWrites'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_AUTHORIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEAUTHORIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL'),
            ]),
        ]);
    }
    private function authorizeClusterSecurityGroupIngress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPRanges'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupOwnerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
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
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('CIDRIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
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
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function authorizeDataShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataShareArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProducerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowPubliclyAccessibleConsumers'),
                new \PHPStan\Type\Constant\ConstantStringType('DataShareAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('ManagedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('DataShareType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusChangeDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProducerAllowedWrites'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerAcceptedWrites'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_AUTHORIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEAUTHORIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL'),
            ]),
        ]);
    }
    private function authorizeEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Grantor'),
                new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizeTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowedAllVPCs'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowedVPCs'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointCount'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Authorized'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revoking'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function authorizeSnapshotAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineFullVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptedWithHSM'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountsWithRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualIncrementalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentBackupRateInMegaBytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedSecondsToCompletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestorableNodeTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRemainingDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccountAlias'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchDeleteClusterSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchModifyClusterSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function cancelResize(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TargetNodeType'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetNumberOfNodes'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetClusterType'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportTablesCompleted'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportTablesInProgress'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportTablesNotStarted'),
                new \PHPStan\Type\Constant\ConstantStringType('AvgResizeRateInMegaBytesPerSecond'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalResizeDataInMegaBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetEncryptionType'),
                new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgressPercent'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\FloatType(),
            ]),
        ]);
    }
    private function copyClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineFullVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptedWithHSM'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountsWithRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualIncrementalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentBackupRateInMegaBytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedSecondsToCompletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestorableNodeTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRemainingDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccountAlias'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createAuthenticationProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProfileName'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProfileContent'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createClusterParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
                ]),
            ]),
        ]);
    }
    private function createClusterSecurityGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPRanges'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupOwnerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
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
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('CIDRIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
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
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineFullVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptedWithHSM'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountsWithRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualIncrementalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentBackupRateInMegaBytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedSecondsToCompletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestorableNodeTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRemainingDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccountAlias'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createClusterSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedClusterIpAddressTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('SupportedPlatforms'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createCustomDomainAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertExpiryTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceOwner'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointName'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointCreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createEventSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventSubscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerAwsId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustSubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceIdsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createHsmClientCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificatePublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
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
                ]),
            ]),
        ]);
    }
    private function createHsmConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HsmConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmPartitionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
                ]),
            ]),
        ]);
    }
    private function createIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationName'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('AdditionalEncryptionContext'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncing'),
                    new \PHPStan\Type\Constant\ConstantStringType('needs_attention'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createRedshiftIdcApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RedshiftIdcApplication'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IdcInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftIdcApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftIdcApplicationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdcDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdcManagedApplicationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdcOnboardStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizedTokenIssuerList'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceIntegrations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedTokenIssuerArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthorizedAudiencesList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LakeFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3AccessGrants'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LakeFormationQuery'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadWriteAccess'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createScheduledAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionName'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetAction'),
                new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                new \PHPStan\Type\Constant\ConstantStringType('IamRole'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('NextInvocations'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeCluster'),
                    new \PHPStan\Type\Constant\ConstantStringType('PauseCluster'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResumeCluster'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Classic'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createSnapshotCopyGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrant'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
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
                ]),
            ]),
        ]);
    }
    private function createSnapshotSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextInvocations'),
                new \PHPStan\Type\Constant\ConstantStringType('AssociatedClusterCount'),
                new \PHPStan\Type\Constant\ConstantStringType('AssociatedClusters'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleAssociationState'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createUsageLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UsageLimitId'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('FeatureType'),
                new \PHPStan\Type\Constant\ConstantStringType('LimitType'),
                new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                new \PHPStan\Type\Constant\ConstantStringType('BreachAction'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('spectrum'),
                    new \PHPStan\Type\Constant\ConstantStringType('concurrency-scaling'),
                    new \PHPStan\Type\Constant\ConstantStringType('cross-region-datasharing'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('time'),
                    new \PHPStan\Type\Constant\ConstantStringType('data-scanned'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('daily'),
                    new \PHPStan\Type\Constant\ConstantStringType('weekly'),
                    new \PHPStan\Type\Constant\ConstantStringType('monthly'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('log'),
                    new \PHPStan\Type\Constant\ConstantStringType('emit-metric'),
                    new \PHPStan\Type\Constant\ConstantStringType('disable'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function deauthorizeDataShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataShareArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProducerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowPubliclyAccessibleConsumers'),
                new \PHPStan\Type\Constant\ConstantStringType('DataShareAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('ManagedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('DataShareType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusChangeDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProducerAllowedWrites'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerAcceptedWrites'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_AUTHORIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEAUTHORIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL'),
            ]),
        ]);
    }
    private function deleteAuthenticationProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProfileName'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteClusterParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteClusterSecurityGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineFullVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptedWithHSM'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountsWithRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualIncrementalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentBackupRateInMegaBytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedSecondsToCompletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestorableNodeTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRemainingDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccountAlias'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteClusterSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCustomDomainAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceOwner'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointName'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointCreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteEventSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteHsmClientCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteHsmConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationName'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('AdditionalEncryptionContext'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncing'),
                    new \PHPStan\Type\Constant\ConstantStringType('needs_attention'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function deletePartner(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                new \PHPStan\Type\Constant\ConstantStringType('PartnerName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteRedshiftIdcApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteScheduledAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSnapshotCopyGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSnapshotSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUsageLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deregisterNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Registering'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deregistering'),
                ]),
            ]),
        ]);
    }
    private function describeAccountAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountAttributes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeValues'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeAuthenticationProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProfiles'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProfileName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProfileContent'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeClusterDbRevisions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterDbRevisions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentDatabaseRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseRevisionReleaseDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionTargets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseRevision'),
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseRevisionReleaseDate'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeClusterParameterGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ParameterGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeClusterParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('static'),
                            new \PHPStan\Type\Constant\ConstantStringType('dynamic'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeClusterSecurityGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPRanges'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupOwnerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
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
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('CIDRIP'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            ], [
                                new \PHPStan\Type\StringType(),
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
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeClusterSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Snapshots'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineFullVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptedWithHSM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountsWithRestoreAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalBackupSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActualIncrementalBackupSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('BackupProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentBackupRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedSecondsToCompletion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestorableNodeTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRemainingDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountAlias'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeClusterSubnetGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportedClusterIpAddressTypes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SupportedPlatforms'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeClusterTracks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTracks'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateTargets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('SupportedOperations'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeClusterVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterVersions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroupFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Clusters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                        new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
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
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('applying'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('auto'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeCustomDomainAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Associations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateAssociations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeDataShares(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataShares'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataShareArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProducerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowPubliclyAccessibleConsumers'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataShareAssociations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManagedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataShareType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConsumerIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConsumerRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('StatusChangeDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProducerAllowedWrites'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConsumerAcceptedWrites'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_AUTHORIZATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEAUTHORIZED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDataSharesForConsumer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataShares'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataShareArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProducerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowPubliclyAccessibleConsumers'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataShareAssociations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManagedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataShareType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConsumerIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConsumerRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('StatusChangeDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProducerAllowedWrites'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConsumerAcceptedWrites'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_AUTHORIZATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEAUTHORIZED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDataSharesForProducer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataShares'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataShareArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProducerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowPubliclyAccessibleConsumers'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataShareAssociations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManagedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataShareType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConsumerIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConsumerRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('StatusChangeDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProducerAllowedWrites'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConsumerAcceptedWrites'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_AUTHORIZATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEAUTHORIZED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDefaultClusterParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DefaultClusterParameters'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('IsModifiable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumEngineVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('static'),
                                new \PHPStan\Type\Constant\ConstantStringType('dynamic'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointAccessList'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointCreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEndpointAuthorization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointAuthorizationList'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Grantor'),
                        new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthorizeTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedAllVPCs'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedVPCs'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Authorized'),
                            new \PHPStan\Type\Constant\ConstantStringType('Revoking'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEventCategories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesMapList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EventId'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventCategories'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeEventSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('EventSubscriptionsList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerAwsId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustSubscriptionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubscriptionCreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceIdsList'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesList'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Events'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventCategories'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cluster'),
                            new \PHPStan\Type\Constant\ConstantStringType('cluster-parameter-group'),
                            new \PHPStan\Type\Constant\ConstantStringType('cluster-security-group'),
                            new \PHPStan\Type\Constant\ConstantStringType('cluster-snapshot'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduled-action'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeHsmClientCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificates'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificatePublicKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
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
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeHsmConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmPartitionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeInboundIntegrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('InboundIntegrations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IntegrationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('creating'),
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('syncing'),
                            new \PHPStan\Type\Constant\ConstantStringType('needs_attention'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeIntegrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('Integrations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IntegrationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntegrationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalEncryptionContext'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('creating'),
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('syncing'),
                            new \PHPStan\Type\Constant\ConstantStringType('needs_attention'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeLoggingStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoggingEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulDeliveryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastFailureTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastFailureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('LogDestinationType'),
                new \PHPStan\Type\Constant\ConstantStringType('LogExports'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudwatch'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeNodeConfigurationOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NodeConfigurationOptionList'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedDiskUtilizationPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('standard'),
                            new \PHPStan\Type\Constant\ConstantStringType('high-performance'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeOrderableClusterOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrderableClusterOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('SupportedPlatforms'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePartners(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PartnerIntegrationInfoList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PartnerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                            new \PHPStan\Type\Constant\ConstantStringType('RuntimeFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectionFailure'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeRedshiftIdcApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RedshiftIdcApplications'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdcInstanceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RedshiftIdcApplicationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RedshiftIdcApplicationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdcDisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdcManagedApplicationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdcOnboardStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthorizedTokenIssuerList'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceIntegrations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedTokenIssuerArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('AuthorizedAudiencesList'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LakeFormation'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3AccessGrants'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LakeFormationQuery'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                            ]),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ReadWriteAccess'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                            ]),
                                        ]),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeReservedNodeExchangeStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeReservedNodeOfferings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                        new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('OfferingType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Regular'),
                            new \PHPStan\Type\Constant\ConstantStringType('Upgradable'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeReservedNodes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ReservedNodes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                        new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('OfferingType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Regular'),
                            new \PHPStan\Type\Constant\ConstantStringType('Upgradable'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeResize(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TargetNodeType'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetNumberOfNodes'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetClusterType'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportTablesCompleted'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportTablesInProgress'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportTablesNotStarted'),
                new \PHPStan\Type\Constant\ConstantStringType('AvgResizeRateInMegaBytesPerSecond'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalResizeDataInMegaBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetEncryptionType'),
                new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgressPercent'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\FloatType(),
            ]),
        ]);
    }
    private function describeScheduledActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledActions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                        new \PHPStan\Type\Constant\ConstantStringType('IamRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('NextInvocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResizeCluster'),
                            new \PHPStan\Type\Constant\ConstantStringType('PauseCluster'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResumeCluster'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                                new \PHPStan\Type\Constant\ConstantStringType('Classic'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeSnapshotCopyGrants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrants'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
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
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeSnapshotSchedules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotSchedules'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleDefinitions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('NextInvocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedClusterCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociatedClusters'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScheduleAssociationState'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TotalBackupSizeInMegaBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalProvisionedStorageInMegaBytes'),
            ], [
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\FloatType(),
            ]),
        ]);
    }
    private function describeTableRestoreStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableRestoreStatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TableRestoreRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceDatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceSchemaName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceTableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetDatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetSchemaName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewTableName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaggedResources'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeUsageLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UsageLimits'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UsageLimitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('FeatureType'),
                        new \PHPStan\Type\Constant\ConstantStringType('LimitType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                        new \PHPStan\Type\Constant\ConstantStringType('BreachAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('spectrum'),
                            new \PHPStan\Type\Constant\ConstantStringType('concurrency-scaling'),
                            new \PHPStan\Type\Constant\ConstantStringType('cross-region-datasharing'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('time'),
                            new \PHPStan\Type\Constant\ConstantStringType('data-scanned'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('daily'),
                            new \PHPStan\Type\Constant\ConstantStringType('weekly'),
                            new \PHPStan\Type\Constant\ConstantStringType('monthly'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('log'),
                            new \PHPStan\Type\Constant\ConstantStringType('emit-metric'),
                            new \PHPStan\Type\Constant\ConstantStringType('disable'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disableLogging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoggingEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulDeliveryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastFailureTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastFailureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('LogDestinationType'),
                new \PHPStan\Type\Constant\ConstantStringType('LogExports'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudwatch'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function disableSnapshotCopy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function disassociateDataShareConsumer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataShareArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProducerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowPubliclyAccessibleConsumers'),
                new \PHPStan\Type\Constant\ConstantStringType('DataShareAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('ManagedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('DataShareType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusChangeDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProducerAllowedWrites'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerAcceptedWrites'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_AUTHORIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEAUTHORIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL'),
            ]),
        ]);
    }
    private function enableLogging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoggingEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                new \PHPStan\Type\Constant\ConstantStringType('S3KeyPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulDeliveryTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastFailureTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastFailureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('LogDestinationType'),
                new \PHPStan\Type\Constant\ConstantStringType('LogExports'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudwatch'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function enableSnapshotCopy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function failoverPrimaryCompute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getClusterCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DbUser'),
                new \PHPStan\Type\Constant\ConstantStringType('DbPassword'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getClusterCredentialsWithIAM(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DbUser'),
                new \PHPStan\Type\Constant\ConstantStringType('DbPassword'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                new \PHPStan\Type\Constant\ConstantStringType('NextRefreshTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getReservedNodeExchangeConfigurationOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeConfigurationOptionList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNode'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOffering'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingId'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                            new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('OfferingType'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Regular'),
                                new \PHPStan\Type\Constant\ConstantStringType('Upgradable'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingId'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                            new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                            new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('OfferingType'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Regular'),
                                new \PHPStan\Type\Constant\ConstantStringType('Upgradable'),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getReservedNodeExchangeOfferings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                        new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('OfferingType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Regular'),
                            new \PHPStan\Type\Constant\ConstantStringType('Upgradable'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Recommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('NamespaceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecommendationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Observation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImpactRanking'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecommendationText'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecommendedActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReferenceLinks'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('Database'),
                                new \PHPStan\Type\Constant\ConstantStringType('Command'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLI'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('Link'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyAquaConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('applying'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('auto'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function modifyAuthenticationProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProfileName'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationProfileContent'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function modifyClusterDbRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function modifyClusterIamRoles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function modifyClusterMaintenance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function modifyClusterParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineFullVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptedWithHSM'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountsWithRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualIncrementalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentBackupRateInMegaBytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedSecondsToCompletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestorableNodeTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRemainingDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccountAlias'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function modifyClusterSnapshotSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function modifyClusterSubnetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedClusterIpAddressTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetAvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('SupportedPlatforms'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function modifyCustomDomainAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertExpiryTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceOwner'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointName'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointCreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function modifyEventSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventSubscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerAwsId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustSubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionCreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceIdsList'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventCategoriesList'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function modifyIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationName'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('AdditionalEncryptionContext'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncing'),
                    new \PHPStan\Type\Constant\ConstantStringType('needs_attention'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function modifyRedshiftIdcApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RedshiftIdcApplication'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IdcInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftIdcApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftIdcApplicationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdcDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdcManagedApplicationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdcOnboardStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizedTokenIssuerList'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceIntegrations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedTokenIssuerArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthorizedAudiencesList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LakeFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3AccessGrants'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LakeFormationQuery'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadWriteAccess'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function modifyScheduledAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionName'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetAction'),
                new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                new \PHPStan\Type\Constant\ConstantStringType('IamRole'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('NextInvocations'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeCluster'),
                    new \PHPStan\Type\Constant\ConstantStringType('PauseCluster'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResumeCluster'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Classic'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function modifySnapshotCopyRetentionPeriod(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function modifySnapshotSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextInvocations'),
                new \PHPStan\Type\Constant\ConstantStringType('AssociatedClusterCount'),
                new \PHPStan\Type\Constant\ConstantStringType('AssociatedClusters'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleAssociationState'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function modifyUsageLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UsageLimitId'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('FeatureType'),
                new \PHPStan\Type\Constant\ConstantStringType('LimitType'),
                new \PHPStan\Type\Constant\ConstantStringType('Amount'),
                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                new \PHPStan\Type\Constant\ConstantStringType('BreachAction'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('spectrum'),
                    new \PHPStan\Type\Constant\ConstantStringType('concurrency-scaling'),
                    new \PHPStan\Type\Constant\ConstantStringType('cross-region-datasharing'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('time'),
                    new \PHPStan\Type\Constant\ConstantStringType('data-scanned'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('daily'),
                    new \PHPStan\Type\Constant\ConstantStringType('weekly'),
                    new \PHPStan\Type\Constant\ConstantStringType('monthly'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('log'),
                    new \PHPStan\Type\Constant\ConstantStringType('emit-metric'),
                    new \PHPStan\Type\Constant\ConstantStringType('disable'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function pauseCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function purchaseReservedNodeOffering(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReservedNode'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeOfferingType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Regular'),
                        new \PHPStan\Type\Constant\ConstantStringType('Upgradable'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function rebootCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function registerNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Registering'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deregistering'),
                ]),
            ]),
        ]);
    }
    private function rejectDataShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataShareArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ProducerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowPubliclyAccessibleConsumers'),
                new \PHPStan\Type\Constant\ConstantStringType('DataShareAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('ManagedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('DataShareType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusChangeDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProducerAllowedWrites'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerAcceptedWrites'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_AUTHORIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEAUTHORIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL'),
            ]),
        ]);
    }
    private function resetClusterParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resizeCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function restoreFromClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function restoreTableFromClusterSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableRestoreStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableRestoreRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceSchemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceTableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetDatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetSchemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NewTableName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
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
    private function resumeCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function revokeClusterSecurityGroupIngress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPRanges'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2SecurityGroupOwnerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
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
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('CIDRIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
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
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function revokeEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Grantor'),
                new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizeTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowedAllVPCs'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowedVPCs'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointCount'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Authorized'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revoking'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function revokeSnapshotAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Snapshot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineFullVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptedWithHSM'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountsWithRestoreAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualIncrementalBackupSizeInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackupProgressInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentBackupRateInMegaBytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedSecondsToCompletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestorableNodeTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRemainingDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotRetentionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccountAlias'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function rotateEncryptionKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterAvailabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('DBName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSubnetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreferredMaintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingModifiedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowVersionUpgrade'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('HsmStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterSnapshotCopyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterPublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticIpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterRevisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticResizeNumberOfNodeOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeferredMaintenanceWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotScheduleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedNextSnapshotScheduleTimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResizeInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneRelocationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalStorageCapacityInMegaBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AquaConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultIamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomDomainCertificateExpiryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPasswordSecretKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiAZSecondary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaces'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Address'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterSecurityGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcSecurityGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterParameterStatusList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ParameterApplyErrorDescription'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MasterUserPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('NodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnhancedVpcRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceTrackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRestoreRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotSizeInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentRateInMegaBytesPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalDataInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferredInMegaBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeToCompletionInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HsmClientCertificateIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('HsmConfigurationIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManualSnapshotRetentionPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCopyGrantName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceStartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeferMaintenanceEndTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCancelResize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AquaStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AquaConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('applying'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('auto'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedNodeExchangeRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceReservedNodeCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeOfferingId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetReservedNodeCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterNodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NodeRole'),
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateIPAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PublicIPAddress'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updatePartnerStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                new \PHPStan\Type\Constant\ConstantStringType('PartnerName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}