<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class EmrClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Emr\EmrClient>
     */
    public function getClass(): string
    {
        return \Aws\Emr\EmrClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addInstanceFleet',
            'addInstanceGroups',
            'addJobFlowSteps',
            'addTags',
            'cancelSteps',
            'createSecurityConfiguration',
            'createStudio',
            'createStudioSessionMapping',
            'deleteSecurityConfiguration',
            'deleteStudio',
            'deleteStudioSessionMapping',
            'describeCluster',
            'describeJobFlows',
            'describeNotebookExecution',
            'describeReleaseLabel',
            'describeSecurityConfiguration',
            'describeStep',
            'describeStudio',
            'getAutoTerminationPolicy',
            'getBlockPublicAccessConfiguration',
            'getClusterSessionCredentials',
            'getManagedScalingPolicy',
            'getStudioSessionMapping',
            'listBootstrapActions',
            'listClusters',
            'listInstanceFleets',
            'listInstanceGroups',
            'listInstances',
            'listNotebookExecutions',
            'listReleaseLabels',
            'listSecurityConfigurations',
            'listSteps',
            'listStudioSessionMappings',
            'listStudios',
            'listSupportedInstanceTypes',
            'modifyCluster',
            'modifyInstanceFleet',
            'modifyInstanceGroups',
            'putAutoScalingPolicy',
            'putAutoTerminationPolicy',
            'putBlockPublicAccessConfiguration',
            'putManagedScalingPolicy',
            'removeAutoScalingPolicy',
            'removeAutoTerminationPolicy',
            'removeManagedScalingPolicy',
            'removeTags',
            'runJobFlow',
            'setKeepJobFlowAliveWhenNoSteps',
            'setTerminationProtection',
            'setUnhealthyNodeReplacement',
            'setVisibleToAllUsers',
            'startNotebookExecution',
            'stopNotebookExecution',
            'terminateJobFlows',
            'updateStudio',
            'updateStudioSessionMapping',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addInstanceFleet' => $this->addInstanceFleet(),
            'addInstanceGroups' => $this->addInstanceGroups(),
            'addJobFlowSteps' => $this->addJobFlowSteps(),
            'addTags' => $this->addTags(),
            'cancelSteps' => $this->cancelSteps(),
            'createSecurityConfiguration' => $this->createSecurityConfiguration(),
            'createStudio' => $this->createStudio(),
            'createStudioSessionMapping' => $this->createStudioSessionMapping(),
            'deleteSecurityConfiguration' => $this->deleteSecurityConfiguration(),
            'deleteStudio' => $this->deleteStudio(),
            'deleteStudioSessionMapping' => $this->deleteStudioSessionMapping(),
            'describeCluster' => $this->describeCluster(),
            'describeJobFlows' => $this->describeJobFlows(),
            'describeNotebookExecution' => $this->describeNotebookExecution(),
            'describeReleaseLabel' => $this->describeReleaseLabel(),
            'describeSecurityConfiguration' => $this->describeSecurityConfiguration(),
            'describeStep' => $this->describeStep(),
            'describeStudio' => $this->describeStudio(),
            'getAutoTerminationPolicy' => $this->getAutoTerminationPolicy(),
            'getBlockPublicAccessConfiguration' => $this->getBlockPublicAccessConfiguration(),
            'getClusterSessionCredentials' => $this->getClusterSessionCredentials(),
            'getManagedScalingPolicy' => $this->getManagedScalingPolicy(),
            'getStudioSessionMapping' => $this->getStudioSessionMapping(),
            'listBootstrapActions' => $this->listBootstrapActions(),
            'listClusters' => $this->listClusters(),
            'listInstanceFleets' => $this->listInstanceFleets(),
            'listInstanceGroups' => $this->listInstanceGroups(),
            'listInstances' => $this->listInstances(),
            'listNotebookExecutions' => $this->listNotebookExecutions(),
            'listReleaseLabels' => $this->listReleaseLabels(),
            'listSecurityConfigurations' => $this->listSecurityConfigurations(),
            'listSteps' => $this->listSteps(),
            'listStudioSessionMappings' => $this->listStudioSessionMappings(),
            'listStudios' => $this->listStudios(),
            'listSupportedInstanceTypes' => $this->listSupportedInstanceTypes(),
            'modifyCluster' => $this->modifyCluster(),
            'modifyInstanceFleet' => $this->modifyInstanceFleet(),
            'modifyInstanceGroups' => $this->modifyInstanceGroups(),
            'putAutoScalingPolicy' => $this->putAutoScalingPolicy(),
            'putAutoTerminationPolicy' => $this->putAutoTerminationPolicy(),
            'putBlockPublicAccessConfiguration' => $this->putBlockPublicAccessConfiguration(),
            'putManagedScalingPolicy' => $this->putManagedScalingPolicy(),
            'removeAutoScalingPolicy' => $this->removeAutoScalingPolicy(),
            'removeAutoTerminationPolicy' => $this->removeAutoTerminationPolicy(),
            'removeManagedScalingPolicy' => $this->removeManagedScalingPolicy(),
            'removeTags' => $this->removeTags(),
            'runJobFlow' => $this->runJobFlow(),
            'setKeepJobFlowAliveWhenNoSteps' => $this->setKeepJobFlowAliveWhenNoSteps(),
            'setTerminationProtection' => $this->setTerminationProtection(),
            'setUnhealthyNodeReplacement' => $this->setUnhealthyNodeReplacement(),
            'setVisibleToAllUsers' => $this->setVisibleToAllUsers(),
            'startNotebookExecution' => $this->startNotebookExecution(),
            'stopNotebookExecution' => $this->stopNotebookExecution(),
            'terminateJobFlows' => $this->terminateJobFlows(),
            'updateStudio' => $this->updateStudio(),
            'updateStudioSessionMapping' => $this->updateStudioSessionMapping(),
        };
    }
    private function addInstanceFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                new \PHPStan\Type\Constant\ConstantStringType('InstanceFleetId'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function addInstanceGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobFlowId'),
                new \PHPStan\Type\Constant\ConstantStringType('InstanceGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function addJobFlowSteps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StepIds'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function addTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelSteps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CancelStepsInfoList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StepId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createSecurityConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createStudio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StudioId'),
                new \PHPStan\Type\Constant\ConstantStringType('Url'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStudioSessionMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSecurityConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteStudio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteStudioSessionMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceCollectionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogEncryptionKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedAmiVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('RunningAmiVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReleaseLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoTerminate'),
                    new \PHPStan\Type\Constant\ConstantStringType('TerminationProtected'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnhealthyNodeReplacement'),
                    new \PHPStan\Type\Constant\ConstantStringType('VisibleToAllUsers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('NormalizedInstanceHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('MasterPublicDnsName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScaleDownBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomAmiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EbsRootVolumeSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('RepoUpgradeOnBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('KerberosAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StepConcurrencyLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlacementGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('OSReleaseLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('EbsRootVolumeIops'),
                    new \PHPStan\Type\Constant\ConstantStringType('EbsRootVolumeThroughput'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED_WITH_ERRORS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_FLEET_TIMEOUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAP_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('USER_REQUEST'),
                                new \PHPStan\Type\Constant\ConstantStringType('STEP_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL_STEPS_COMPLETED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadyDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorData'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2KeyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestedEc2SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestedEc2AvailabilityZones'),
                        new \PHPStan\Type\Constant\ConstantStringType('IamInstanceProfile'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmrManagedMasterSecurityGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmrManagedSlaveSecurityGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceAccessSecurityGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalMasterSecurityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalSlaveSecurityGroups'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_FLEET'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_GROUP'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('Args'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdditionalInfo'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                            new \PHPStan\Type\Constant\ConstantStringType('Configurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_AT_INSTANCE_HOUR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_AT_TASK_COMPLETION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Realm'),
                        new \PHPStan\Type\Constant\ConstantStringType('KdcAdminPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrossRealmTrustPrincipalPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDomainJoinUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDomainJoinPassword'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlacementStrategy'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MASTER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CORE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SPREAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('PARTITION'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLUSTER'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeJobFlows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobFlows'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobFlowId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogEncryptionKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmiVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatusDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                        new \PHPStan\Type\Constant\ConstantStringType('Steps'),
                        new \PHPStan\Type\Constant\ConstantStringType('BootstrapActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportedProducts'),
                        new \PHPStan\Type\Constant\ConstantStringType('VisibleToAllUsers'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobFlowRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScaleDownBehavior'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadyDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastStateChangeReason'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHUTTING_DOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MasterInstanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('MasterPublicDnsName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MasterInstanceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SlaveInstanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('NormalizedInstanceHours'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ec2KeyName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Placement'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeepJobFlowAliveWhenNoSteps'),
                            new \PHPStan\Type\Constant\ConstantStringType('TerminationProtected'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnhealthyNodeReplacement'),
                            new \PHPStan\Type\Constant\ConstantStringType('HadoopVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceGroupId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Market'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceRole'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BidPrice'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceRequestCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceRunningCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LastStateChangeReason'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadyDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CustomAmiId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SPOT'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MASTER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAPPING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RECONFIGURING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RESIZING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ARRESTED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SHUTTING_DOWN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENDED'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StepConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatusDetail'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ActionOnFailure'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HadoopJarStep'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_JOB_FLOW'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_CLUSTER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_AND_WAIT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Jar'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MainClass'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Args'),
                                    ], [
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
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LastStateChangeReason'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INTERRUPTED'),
                                    ]),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BootstrapActionConfig'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScriptBootstrapAction'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Args'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_AT_INSTANCE_HOUR'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_AT_TASK_COMPLETION'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeNotebookExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotebookExecution'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NotebookExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EditorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionEngine'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotebookExecutionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotebookParams'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputNotebookURI'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastStateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotebookInstanceSecurityGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotebookS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputNotebookS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputNotebookFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentVariables'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('MasterInstanceSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('EMR'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FINISHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FINISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('HTML'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeReleaseLabel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReleaseLabel'),
                new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailableOSReleases'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeSecurityConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeStep(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Step'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionOnFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Jar'),
                        new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                        new \PHPStan\Type\Constant\ConstantStringType('MainClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Args'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_JOB_FLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_CLUSTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_AND_WAIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCEL_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERRUPTED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeStudio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Studio'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StudioId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StudioArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkspaceSecurityGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineSecurityGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdpAuthUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdpRelayStateParameterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdcInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustedIdentityPropagationEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdcUserAssignment'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SSO'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getAutoTerminationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoTerminationPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IdleTimeout'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getBlockPublicAccessConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAccessConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAccessConfigurationMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicSecurityGroupRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermittedPublicSecurityGroupRuleRanges'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxRange'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedByArn'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getClusterSessionCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpiresAt'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UsernamePassword'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                        new \PHPStan\Type\Constant\ConstantStringType('Password'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getManagedScalingPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedScalingPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeLimits'),
                    new \PHPStan\Type\Constant\ConstantStringType('UtilizationPerformanceIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalingStrategy'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UnitType'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinimumCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumOnDemandCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumCoreCapacityUnits'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceFleetUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                            new \PHPStan\Type\Constant\ConstantStringType('VCPU'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADVANCED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getStudioSessionMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionMapping'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StudioId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionPolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listBootstrapActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BootstrapActions'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScriptPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('Args'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Clusters'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('NormalizedInstanceHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutpostArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED_WITH_ERRORS'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_FLEET_TIMEOUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAP_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USER_REQUEST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STEP_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL_STEPS_COMPLETED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadyDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ErrorData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstanceFleets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceFleets'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceFleetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetOnDemandCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetSpotCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionedOnDemandCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionedSpotCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceTypeSpecifications'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchSpecifications'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResizeSpecifications'),
                        new \PHPStan\Type\Constant\ConstantStringType('Context'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESIZING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLUSTER_TERMINATED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadyDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('WeightedCapacity'),
                                new \PHPStan\Type\Constant\ConstantStringType('BidPrice'),
                                new \PHPStan\Type\Constant\ConstantStringType('BidPriceAsPercentageOfOnDemandPrice'),
                                new \PHPStan\Type\Constant\ConstantStringType('Configurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('EbsBlockDevices'),
                                new \PHPStan\Type\Constant\ConstantStringType('EbsOptimized'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomAmiId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Configurations'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\MixedType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('VolumeSpecification'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Device'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SizeInGB'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SpotSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandSpecification'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TimeoutDurationMinutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('TimeoutAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('BlockDurationMinutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllocationStrategy'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SWITCH_TO_ON_DEMAND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_CLUSTER'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('capacity-optimized'),
                                    new \PHPStan\Type\Constant\ConstantStringType('price-capacity-optimized'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lowest-price'),
                                    new \PHPStan\Type\Constant\ConstantStringType('diversified'),
                                    new \PHPStan\Type\Constant\ConstantStringType('capacity-optimized-prioritized'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AllocationStrategy'),
                                new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationOptions'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('lowest-price'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prioritized'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UsageStrategy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationPreference'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationResourceGroupArn'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('use-capacity-reservations-first'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('open'),
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SpotResizeSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandResizeSpecification'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TimeoutDurationMinutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllocationStrategy'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('capacity-optimized'),
                                    new \PHPStan\Type\Constant\ConstantStringType('price-capacity-optimized'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lowest-price'),
                                    new \PHPStan\Type\Constant\ConstantStringType('diversified'),
                                    new \PHPStan\Type\Constant\ConstantStringType('capacity-optimized-prioritized'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TimeoutDurationMinutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllocationStrategy'),
                                new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationOptions'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('lowest-price'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prioritized'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UsageStrategy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationPreference'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationResourceGroupArn'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('use-capacity-reservations-first'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('open'),
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstanceGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Market'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceGroupType'),
                        new \PHPStan\Type\Constant\ConstantStringType('BidPrice'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestedInstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunningInstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Configurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationsVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfullyAppliedConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfullyAppliedConfigurationsVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('EbsBlockDevices'),
                        new \PHPStan\Type\Constant\ConstantStringType('EbsOptimized'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShrinkPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomAmiId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPOT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MASTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RECONFIGURING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESIZING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ARRESTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHUTTING_DOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENDED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLUSTER_TERMINATED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadyDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                                new \PHPStan\Type\Constant\ConstantStringType('Configurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Classification'),
                                new \PHPStan\Type\Constant\ConstantStringType('Configurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeSpecification'),
                                new \PHPStan\Type\Constant\ConstantStringType('Device'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SizeInGB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DecommissionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceResizePolicy'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InstancesToTerminate'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstancesToProtect'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceTerminationTimeout'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('Constraints'),
                            new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ATTACHING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ATTACHED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DETACHING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DETACHED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('USER_REQUEST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PROVISION_FAILURE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CLEANUP_FAILURE'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Trigger'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Market'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SimpleScalingPolicyConfiguration'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SPOT'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AdjustmentType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScalingAdjustment'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CoolDown'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('CHANGE_IN_CAPACITY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PERCENT_CHANGE_IN_CAPACITY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('EXACT_CAPACITY'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchAlarmDefinition'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EvaluationPeriods'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_COUNT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AVERAGE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MINIMUM'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM'),
                                            ]),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SECONDS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MICRO_SECONDS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MILLI_SECONDS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BYTES'),
                                                new \PHPStan\Type\Constant\ConstantStringType('KILO_BYTES'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEGA_BYTES'),
                                                new \PHPStan\Type\Constant\ConstantStringType('GIGA_BYTES'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TERA_BYTES'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BITS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('KILO_BITS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEGA_BITS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('GIGA_BITS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TERA_BITS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BYTES_PER_SECOND'),
                                                new \PHPStan\Type\Constant\ConstantStringType('KILO_BYTES_PER_SECOND'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEGA_BYTES_PER_SECOND'),
                                                new \PHPStan\Type\Constant\ConstantStringType('GIGA_BYTES_PER_SECOND'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TERA_BYTES_PER_SECOND'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BITS_PER_SECOND'),
                                                new \PHPStan\Type\Constant\ConstantStringType('KILO_BITS_PER_SECOND'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEGA_BITS_PER_SECOND'),
                                                new \PHPStan\Type\Constant\ConstantStringType('GIGA_BITS_PER_SECOND'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TERA_BITS_PER_SECOND'),
                                                new \PHPStan\Type\Constant\ConstantStringType('COUNT_PER_SECOND'),
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
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PublicDnsName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PublicIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateDnsName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceFleetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Market'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('EbsVolumes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWAITING_FULFILLMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAP_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLUSTER_TERMINATED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadyDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPOT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Device'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeId'),
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
    private function listNotebookExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotebookExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotebookExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EditorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotebookExecutionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotebookS3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionEngineId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('START_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FINISHING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FINISHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOP_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReleaseLabels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReleaseLabels'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSecurityConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSteps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Steps'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Config'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionOnFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Jar'),
                            new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                            new \PHPStan\Type\Constant\ConstantStringType('MainClass'),
                            new \PHPStan\Type\Constant\ConstantStringType('Args'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_JOB_FLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_CLUSTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCEL_AND_WAIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailureDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CANCEL_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERRUPTED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogFile'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStudioSessionMappings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionMappings'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StudioId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SessionPolicyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStudios(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Studios'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StudioId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SSO'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSupportedInstanceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SupportedInstanceTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryGB'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageGB'),
                        new \PHPStan\Type\Constant\ConstantStringType('VCPU'),
                        new \PHPStan\Type\Constant\ConstantStringType('Is64BitsOnly'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceFamilyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EbsOptimizedAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('EbsOptimizedByDefault'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfDisks'),
                        new \PHPStan\Type\Constant\ConstantStringType('EbsStorageOnly'),
                        new \PHPStan\Type\Constant\ConstantStringType('Architecture'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StepConcurrencyLevel'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function modifyInstanceFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function modifyInstanceGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putAutoScalingPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterId'),
                new \PHPStan\Type\Constant\ConstantStringType('InstanceGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Constraints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTACHING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DETACHING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DETACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('USER_REQUEST'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVISION_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLEANUP_FAILURE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            new \PHPStan\Type\Constant\ConstantStringType('Action'),
                            new \PHPStan\Type\Constant\ConstantStringType('Trigger'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Market'),
                                new \PHPStan\Type\Constant\ConstantStringType('SimpleScalingPolicyConfiguration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SPOT'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AdjustmentType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScalingAdjustment'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CoolDown'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CHANGE_IN_CAPACITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERCENT_CHANGE_IN_CAPACITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EXACT_CAPACITY'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchAlarmDefinition'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationPeriods'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_COUNT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AVERAGE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MINIMUM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECONDS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MICRO_SECONDS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MILLI_SECONDS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BYTES'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KILO_BYTES'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEGA_BYTES'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GIGA_BYTES'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TERA_BYTES'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BITS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KILO_BITS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEGA_BITS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GIGA_BITS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TERA_BITS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BYTES_PER_SECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KILO_BYTES_PER_SECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEGA_BYTES_PER_SECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GIGA_BYTES_PER_SECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TERA_BYTES_PER_SECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BITS_PER_SECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KILO_BITS_PER_SECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEGA_BITS_PER_SECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GIGA_BITS_PER_SECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TERA_BITS_PER_SECOND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COUNT_PER_SECOND'),
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
                            ]),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putAutoTerminationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putBlockPublicAccessConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putManagedScalingPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeAutoScalingPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeAutoTerminationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeManagedScalingPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function runJobFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobFlowId'),
                new \PHPStan\Type\Constant\ConstantStringType('ClusterArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setKeepJobFlowAliveWhenNoSteps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setTerminationProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setUnhealthyNodeReplacement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setVisibleToAllUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startNotebookExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotebookExecutionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopNotebookExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function terminateJobFlows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateStudio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateStudioSessionMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}