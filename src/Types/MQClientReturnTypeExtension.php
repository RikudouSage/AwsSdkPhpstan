<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MQClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MQ\MQClient>
     */
    public function getClass(): string
    {
        return \Aws\MQ\MQClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createBroker',
            'createConfiguration',
            'createTags',
            'createUser',
            'deleteBroker',
            'deleteTags',
            'deleteUser',
            'describeBroker',
            'describeBrokerEngineTypes',
            'describeBrokerInstanceOptions',
            'describeConfiguration',
            'describeConfigurationRevision',
            'describeUser',
            'listBrokers',
            'listConfigurationRevisions',
            'listConfigurations',
            'listTags',
            'listUsers',
            'promote',
            'rebootBroker',
            'updateBroker',
            'updateConfiguration',
            'updateUser',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createBroker' => $this->createBroker(),
            'createConfiguration' => $this->createConfiguration(),
            'createTags' => $this->createTags(),
            'createUser' => $this->createUser(),
            'deleteBroker' => $this->deleteBroker(),
            'deleteTags' => $this->deleteTags(),
            'deleteUser' => $this->deleteUser(),
            'describeBroker' => $this->describeBroker(),
            'describeBrokerEngineTypes' => $this->describeBrokerEngineTypes(),
            'describeBrokerInstanceOptions' => $this->describeBrokerInstanceOptions(),
            'describeConfiguration' => $this->describeConfiguration(),
            'describeConfigurationRevision' => $this->describeConfigurationRevision(),
            'describeUser' => $this->describeUser(),
            'listBrokers' => $this->listBrokers(),
            'listConfigurationRevisions' => $this->listConfigurationRevisions(),
            'listConfigurations' => $this->listConfigurations(),
            'listTags' => $this->listTags(),
            'listUsers' => $this->listUsers(),
            'promote' => $this->promote(),
            'rebootBroker' => $this->rebootBroker(),
            'updateBroker' => $this->updateBroker(),
            'updateConfiguration' => $this->updateConfiguration(),
            'updateUser' => $this->updateUser(),
        };
    }
    private function createBroker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BrokerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('Created'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SIMPLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LDAP'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteBroker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeBroker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ActionsRequired'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                new \PHPStan\Type\Constant\ConstantStringType('BrokerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
                new \PHPStan\Type\Constant\ConstantStringType('BrokerInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('BrokerName'),
                new \PHPStan\Type\Constant\ConstantStringType('BrokerState'),
                new \PHPStan\Type\Constant\ConstantStringType('Configurations'),
                new \PHPStan\Type\Constant\ConstantStringType('Created'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentMode'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('EngineType'),
                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('HostInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('LdapServerMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Logs'),
                new \PHPStan\Type\Constant\ConstantStringType('MaintenanceWindowStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingAuthenticationStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingEngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingHostInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingLdapServerMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingSecurityGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('PubliclyAccessible'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                new \PHPStan\Type\Constant\ConstantStringType('DataReplicationMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('DataReplicationMode'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingDataReplicationMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingDataReplicationMode'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActionRequiredCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionRequiredInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SIMPLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LDAP'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsoleURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('REBOOT_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CRITICAL_ACTION_REQUIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Current'),
                    new \PHPStan\Type\Constant\ConstantStringType('History'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE_INSTANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_STANDBY_MULTI_AZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('CLUSTER_MULTI_AZ'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseAwsOwnedKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVEMQ'),
                    new \PHPStan\Type\Constant\ConstantStringType('RABBITMQ'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Hosts'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleBase'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleSearchMatching'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleSearchSubtree'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserBase'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserRoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserSearchMatching'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserSearchSubtree'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Audit'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuditLogGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('General'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeneralLogGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Audit'),
                        new \PHPStan\Type\Constant\ConstantStringType('General'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DayOfWeek'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeOfDay'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SIMPLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LDAP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Hosts'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleBase'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleSearchMatching'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleSearchSubtree'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserBase'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserRoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserSearchMatching'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserSearchSubtree'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EBS'),
                    new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PendingChange'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataReplicationCounterpart'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataReplicationRole'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CRDR'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataReplicationCounterpart'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataReplicationRole'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CRDR'),
                ]),
            ]),
        ]);
    }
    private function describeBrokerEngineTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BrokerEngineTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EngineType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersions'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVEMQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('RABBITMQ'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeBrokerInstanceOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BrokerInstanceOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedDeploymentModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedEngineVersions'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVEMQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('RABBITMQ'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EBS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_STANDBY_MULTI_AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLUSTER_MULTI_AZ'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('Created'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EngineType'),
                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SIMPLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LDAP'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVEMQ'),
                    new \PHPStan\Type\Constant\ConstantStringType('RABBITMQ'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeConfigurationRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Created'),
                new \PHPStan\Type\Constant\ConstantStringType('Data'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsoleAccess'),
                new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                new \PHPStan\Type\Constant\ConstantStringType('Username'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationUser'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsoleAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingChange'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function listBrokers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BrokerSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BrokerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BrokerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BrokerState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostInstanceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL_ACTION_REQUIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_STANDBY_MULTI_AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLUSTER_MULTI_AZ'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVEMQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('RABBITMQ'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConfigurationRevisions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Revisions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function listConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Configurations'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthenticationStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SIMPLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LDAP'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVEMQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('RABBITMQ'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PendingChange'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function promote(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rebootBroker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateBroker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoMinorVersionUpgrade'),
                new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
                new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('HostInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('LdapServerMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Logs'),
                new \PHPStan\Type\Constant\ConstantStringType('MaintenanceWindowStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('DataReplicationMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('DataReplicationMode'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingDataReplicationMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingDataReplicationMode'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SIMPLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LDAP'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Hosts'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleBase'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleSearchMatching'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleSearchSubtree'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserBase'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserRoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserSearchMatching'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserSearchSubtree'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Audit'),
                    new \PHPStan\Type\Constant\ConstantStringType('General'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DayOfWeek'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeOfDay'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataReplicationCounterpart'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataReplicationRole'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CRDR'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataReplicationCounterpart'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataReplicationRole'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BrokerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CRDR'),
                ]),
            ]),
        ]);
    }
    private function updateConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Created'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElementName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DISALLOWED_ELEMENT_REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISALLOWED_ATTRIBUTE_REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_ATTRIBUTE_VALUE_REMOVED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}